const WebSocket = require('ws');
const wss = new WebSocket.Server({ port: 8080 });

wss.on('connection', ws => {
    console.log('New client connected');
    
    ws.on('message', message => {
        let data;
        try {
            data = JSON.parse(message);
        } catch (error) {
            console.error('Error parsing message:', error);
            return;
        }

        if (data.type === 'join') {
            ws.channel = data.channel_name;
            console.log(data.channel_name);
            
            ws.user = data.user_name;
            broadcast(ws.channel, `${ws.user} joined the channel.`);
        } else if (data.type === 'leave') {
            if (ws.channel && ws.user) {
                broadcast(ws.channel, `${ws.user} left the channel.`);
                // Clean up the channel and user properties
                delete ws.channel;
                delete ws.user;
            }
        } else if (data.type === 'message') {
            if (ws.channel && ws.user) {
                broadcast(ws.channel, `${ws.user}: ${data.message}`);
            }
        }
    });

    ws.on('close', () => {
        // Handle user leaving
        if (ws.channel && ws.user) {
            broadcast(ws.channel, `${ws.user} left the channel.`);
            delete ws.channel;
            delete ws.user;
        }
        console.log('Client disconnected');
    });
});

function broadcast(channel, message) {
    wss.clients.forEach(client => {
        if (client.channel === channel && client.readyState === WebSocket.OPEN) {
            client.send(JSON.stringify({ type: 'message', text: message }));
        }
    });
}

console.log('WebSocket server is running on ws://localhost:8080');
