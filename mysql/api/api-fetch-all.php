<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


header('Content-Type: Application/json');
header('Access-Control-Allow-origin: *');
header('Access-Control-Allow-Methods: GET,PUT,POST,DELETE');
header('Access-Control-Allow-Headers: Content-Type,Access-Control-Allow-Origin,Access-Control-Allow-Headers');

require '../db.config.php';


$sql = "SELECT * FROM customer";


$result = mysqli_query($con, $sql);
// print_r($result);

if(mysqli_num_rows($result) > 0){

    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($output);
}else{
    echo json_encode(array('message'=> 'Data not fetch', 'status'=> false), true);
}
