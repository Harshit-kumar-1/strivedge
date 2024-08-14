<?php 

header("Content-Type: Application/json");
header("Access-Control-Allow-Methods: POST,PATCH,GET,DELETE");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Header:Access-Control-Allow-Header, Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With");


$data = json_decode(file_get_contents("php://input"), true);


// print_r($data['cname']);

$sno = $data['sno'];
// $cname = $data['cname'];
// $contact = $data['contact'];
// $address = $data['address'];
// $city = $data['city'];
// $country = $data['country'];


require '../db.config.php';


$sql = "DELETE FROM `customer` WHERE `sno` = '$sno' ";

// print_r($sql);

if (mysqli_query($con, $sql)) { 
    echo json_encode(array('message'=> 'Data is Deleted', 'status' => true));
}else{
    echo json_encode(array('message'=> 'Data is Not Deleted', 'status' => false));
}
