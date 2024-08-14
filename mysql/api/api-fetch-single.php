<?php 


header("Content-Type: Application/json");
header("Access-Control-Allow-Methods: POST,PATCH,GET,DELETE");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Header: Content-Type,Access-Control-Allow-Methods,Access-Control-Allow-Origin");


$data = json_decode(file_get_contents("php://input"), true);

$sno = $data['sno'];

// print_r($sno);

require '../db.config.php';


$sql = "SELECT * FROM customer WHERE sno = {$sno}";


$result = mysqli_query($con, $sql);

$istrue = mysqli_num_rows($result) > 0;

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    $data = json_encode($row);

    echo $data;
}else{
    echo json_encode(array('message'=> 'Data not fetch', 'status' => false));
}
