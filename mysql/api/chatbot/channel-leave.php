<?php


require 'db-config.php';

header('Content-Type: application/json');
$data = json_decode(file_get_contents("php://input"), true);

$user_id = mysqli_real_escape_string($con, $data['user_id']);
$channel_id = mysqli_real_escape_string($con, $data['channel_id']);

// Remove user from channel
$sql = "DELETE FROM user_channel WHERE channel_id = $channel_id AND user_id = $user_id";
mysqli_query($con, $sql);

// Check if channel is empty
$sql = "SELECT COUNT(*) as count FROM user_channel WHERE channel_id = $channel_id";
$result = mysqli_query($con, $sql);
$count = mysqli_fetch_assoc($result)['count'];

if ($count == 0) {
    // Delete channel if no users are left
    $sql = "DELETE FROM channels WHERE id = $channel_id";
    mysqli_query($con, $sql);
    $sql = "DELETE FROM messages WHERE channel_id = $channel_id";
    mysqli_query($con, $sql);
}

echo json_encode(['status' => true]);
mysqli_close($con);
?>
