<?php 


header("Content-Type: Application/json");
header("Access-Control-Allow-Methods: POST,PATCH,GET,DELETE");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Header: Content-Type,Access-Control-Allow-Methods,Access-Control-Allow-Origin");

//  using post 
// $data = json_decode(file_get_contents("php://input"), true);
// 
// $name = $data['name'];

// using get
$search = isset($_GET["search"]) ? $_GET["search"] : die("query not sent");

require '../db.config.php';


// $sql = "SELECT * FROM customer WHERE `cname` LIKE '%{$name}%' ";

$sql = "SELECT * FROM customer WHERE `cname` LIKE '%{$search}%' ";

$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_all($result, MYSQLI_ASSOC);
    $data = json_encode($row);
    echo $data;
}else{  
    echo json_encode(array('message'=> 'Data not found', 'status' => false));
}
