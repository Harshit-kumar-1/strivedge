<?php
header('Content-Type: application/json');

require 'db-config.php';


$data = json_decode(file_get_contents("php://input"), true);

$user_id = mysqli_real_escape_string($con, $data['user_id']);
$channel_id = mysqli_real_escape_string($con, $data['channel_id']);
$message = mysqli_real_escape_string($con, $data['message']);

$sql = "INSERT INTO messages (channel_id, user_id, message, timestamp) VALUES ($channel_id, $user_id, '$message', NOW())";
mysqli_query($con, $sql);

echo json_encode(['status' => true]);
mysqli_close($con);
?>
