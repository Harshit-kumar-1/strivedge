<?php

$server = "localhost";
$user = 'root';
$pass = '';
$db = 'users';


$con = mysqli_connect($server, $user, $pass, $db);
if(!$con){
    // $msg = 'Conection failed'. mysqli_connect_error();
    echo 'Conection failed' . mysqli_connect_error();

}

// echo "Connect Success";


// $name = ucfirst($_POST["name"]);
// $gender = ucfirst($_POST["gender"]);
// $age = ucfirst($_POST["age"]);
// $phone = ucfirst($_POST["phone"]);
// $address = ucfirst($_POST["address"]);
// $email = ucfirst($_POST["email"]);
// $pass = ucfirst($_POST["pass"]);


// $sql = "INSERT INTO `users`.`user` (`name`, `gender`, `age`, `phone`, `address`, `email`, `pass`) VALUES ('$name', '$gender', '$age', '$phone', '$address', '$email', '$pass')";

// if (mysqli_query($con, $sql)){
//     echo "user added successfully";
// }else{
//     echo "Error adding user : " . mysqli_error($con);
// }
// mysqli_close($con);
