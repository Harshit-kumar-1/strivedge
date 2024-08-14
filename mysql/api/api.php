<?php

// Set headers to allow API access and specify content type
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

// Include database connection
$servername = "localhost";
$username = "root"; // or your MySQL username
$password = ""; // or your MySQL password
$dbname = "my_api_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the POST data
$data = json_decode(file_get_contents("php://input"));

// Validate received data
if (!empty($data->name) && !empty($data->email)) {

    // Prepare an SQL statement to insert data into the database
    $stmt = $conn->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    $stmt->bind_param("ss", $data->name, $data->email);

    // Execute the statement
    if ($stmt->execute()) {
        // Send a success response
        http_response_code(201);
        echo json_encode(["message" => "User created successfully."]);
    } else {
        // Send an error response
        http_response_code(503);
        echo json_encode(["message" => "Unable to create user."]);
    }

    // Close the statement
    $stmt->close();

} else {
    // Send an error response for incomplete data
    http_response_code(400);
    echo json_encode(["message" => "Incomplete data."]);
}

// Close the connection
$conn->close();