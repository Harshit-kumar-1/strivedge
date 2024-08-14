<?php

$server = "localhost";
$user = 'root';
$pass = '';
$db = 'chatbot';


$con = mysqli_connect($server, $user, $pass, $db);
if(!$con){
    // $msg = 'Conection failed'. mysqli_connect_error();
    echo 'Conection failed' . mysqli_connect_error();
}
echo 'Conection connect';