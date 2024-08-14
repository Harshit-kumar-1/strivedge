<?php 

header("Content-Type: Application/json");
header("Access-Control-Allow-Methods: POST,PATCH,GET,DELETE");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Header:Access-Control-Allow-Header, Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With");


$data = json_decode(file_get_contents("php://input"), true);


// print_r($data['0']['cname']);

$cname = $data['cname'];
$contact = $data['contact'];
$address = $data['address'];
$city = $data['city'];
$country = $data['country'];


require '../db.config.php';


$sql = "INSERT INTO `customer`(`cname`, `contact`, `address`, `city`, `country`) VALUES ('{$cname}', '{$contact}', '{$address}', '{$city}', '{$country}')";


if (mysqli_query($con, $sql)) {
    echo json_encode(array('message'=> 'Data is Inserted', 'status' => true));
}else{
    echo json_encode(array('message'=> 'Data is Not Inserted', 'status' => false));
}
