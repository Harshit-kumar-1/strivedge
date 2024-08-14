let socket;
let channelName = '';
let username = '';

function joinChannel() {
    username = document.getElementById('username').value;
    channelName = document.getElementById('channel').value;
    
    if (!username || !channelName) {
        alert('Please enter both your name and channel name.');
        return;
    }

    // Create a WebSocket connection
    socket = new WebSocket('ws://localhost:8080'); // Change to your WebSocket server URL

    socket.onopen = function() {
        console.log('Connected to WebSocket server');
        // Notify server about the channel join
    // console.log(channelName);

        socket.send(JSON.stringify({
            type: 'join',
            channel_name: channelName,
            user_name: username
        }));
    };
    console.log(JSON.stringify({
        type: 'join',
        channel_name: channelName,
        user_name: username
    }));
    

    socket.onmessage = function(event) {
        const message = JSON.parse(event.data);
        displayMessage(message.user_name + ': ' + message.text);
    };

    socket.onclose = function() {
        console.log('WebSocket connection closed');
    };

    socket.onerror = function(error) {
        console.error('WebSocket error:', error);
    };
}

function sendMessage() {
    const message = document.getElementById('message_input').value;
    if (message && socket && socket.readyState === WebSocket.OPEN) {
        // Send message to the WebSocket server
        socket.send(JSON.stringify({
            type: 'message',
            channel_name: channelName,
            user_name: username,
            message: message
        }));
        document.getElementById('message_input').value = ''; // Clear the input field
    }
}

function displayMessage(text) {
    const messagesDiv = document.getElementById('messages');
    const newMessage = document.createElement('p');
    newMessage.textContent = text;
    messagesDiv.appendChild(newMessage);
    messagesDiv.scrollTop = messagesDiv.scrollHeight; // Scroll to the bottom
}

// Handle page unload to notify the server
window.onbeforeunload = function() {
    if (socket && socket.readyState === WebSocket.OPEN) {
        socket.send(JSON.stringify({
            type: 'leave',
            channel_name: channelName,
            user_name: username
        }));
        socket.close();
    }
};
