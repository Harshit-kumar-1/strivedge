<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    require 'db.config.php';
    function test_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        $data = ucfirst($data);
        return $data;
    }

    $name = test_input($_POST["name"]);
    $gender = test_input($_POST["gender"]);
    $age = test_input($_POST["age"]);
    $phone = test_input($_POST["phone"]);
    $address = test_input($_POST["address"]);
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $pass = password_hash($pass, PASSWORD_DEFAULT);

    $image = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = '/opt/lampp/htdocs/php/mysql/images/' . basename($image);


    $q1 = mysqli_query($con, "SELECT email from user where email= '$email'");
    
    if(mysqli_num_rows($q1) > 0) {
        $msg = "Email is Already Exist";
        // echo "Email is Already Exist";
    }else{


    // echo "Temp file path: " . $tempname . "<br>";
    // echo "Target folder path: " . $folder . "<br>";

    $values = [$name,$image, $gender, $age, $phone, $address, $email, $pass];
    $checked = false;

    foreach ($values as $value) {
        if (!empty($value)) {
            $checked = true;
        }else{
            $checked = false;
        }
    }

    if ($checked) {

        $sql = "INSERT INTO `users`.`user` (`name`,`image`, `gender`, `age`, `phone`, `address`, `email`, `pass`) VALUES ('$name', '$image', '$gender','$age', '$phone', '$address', '$email', '$pass')";

        if (mysqli_query($con, $sql)) {
            if(move_uploaded_file($tempname, $folder)){
                // $msg = "Sign up success. please go to login.";
                
                $msg = "Signup Success.";
            }
            else{
                $msg = "image upload nahi hui Bhai.";                
            }
        } else {
            $msg = "Error adding user : " . mysqli_error($con);
            // $msg = "Hey prabhu ye kya huaa : " . mysqli_error($con);
        }
    } else {
        $msg = "please fill all fields.";
        // $msg = "Sare Dabbe bhar na bhai !.";

    }
    }
    mysqli_close($con);

}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Sign Up</title>
</head>

<body>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <h1>Sign Up</h1>
            <div class="msg">
                <?php if (!empty($msg)) { ?>
                    <p style="height: 40px">
                        <?php echo $msg; ?>
                    </p>

                <?php } ?>
            </div>
            <div class="fields">
                <div class="input-container">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your name" required>
                </div>
                <div class="input-container">
                    <label for="file">Your Picture</label>
                    <input type="file" name="image" id="file" placeholder="Select Your Profile Picture" required>
                </div>
                <div class="input-container">
                    <label for="gender">Your Gender</label>
                    <select name="gender" id="gender">
                        <option value="Male">Male</option>
                        <option value="female">Female</option>
                        <option value="other">Other</option>
                    </select>
                </div>
                <div class="input-container">
                    <label for="age">Your Age</label>
                    <input type="text" name="age" id="age" placeholder="Enter Your age" required>
                </div>
                <div class="input-container">
                    <label for="phone">Your Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter Your phone" required>
                </div>
                <div class="input-container">
                    <label for="address">Your Address</label>
                    <input type="text" name="address" id="address" placeholder="Enter Your address" required>
                </div>
                <div class="input-container">
                    <label for="email">Your Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your email" required>
                </div>
                <div class="input-container">
                    <label for="password">Your Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Your password" required>
                </div>

                <div class="btn">
                    <button type="Submit">Sign Up</button>
                </div>

                <div class="input-container">
                    <p>Already have account ? <span><a href="login.php" class="login">Login</a></span></p>
                </div>

            </div>
        </form>
    </div>

</body>

</html>