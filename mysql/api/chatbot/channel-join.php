<?php

header('Content-Type: application/json');

require 'db-config.php';

$data = json_decode(file_get_contents("php://input"), true);


$name =  $data['name'];
print_r($name);
$channel_name = $data['channelName'];
print_r($channel_name);

 
// Check if channel exists
$sql = "SELECT * FROM channels WHERE channel_name = '$channel_name'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // Channel exists, get the channel ID
    $channel = mysqli_fetch_assoc($result);
    $channel_id = $channel['id'];
} else {
    // Create a new channel
    $sql = "INSERT INTO channels (channel_name, created_by) VALUES ('$channel_name', '$user_id')";
    mysqli_query($con, $sql);
    $channel_id = mysqli_insert_id($con);
}

// Add user to channel
$sql = "INSERT INTO user_channel (channel_id, user_id) VALUES ($channel_id, $user_id)";
mysqli_query($con, $sql);

echo json_encode(['status' => true, 'channel_id' => $channel_id]);
mysqli_close($con);
?>
