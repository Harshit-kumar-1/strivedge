<?php


require 'db-config.php';

header('Content-Type: application/json');
$channel_id = mysqli_real_escape_string($con, $_GET['channel_id']);

$sql = "SELECT m.message, m.timestamp, u.name FROM messages m JOIN users u ON m.user_id = u.id WHERE m.channel_id = $channel_id ORDER BY m.timestamp";
$result = mysqli_query($con, $sql);

$messages = [];
while ($row = mysqli_fetch_assoc($result)) {
    $messages[] = $row;
}

echo json_encode($messages);
mysqli_close($con);
?>
