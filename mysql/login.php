<?php
//
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
//
//require 'db.config.php';
//
//if($_SERVER['REQUEST_METHOD'] == "POST"){
//
//    $email = $_POST['email'];
//    $password = $_POST['password'];
//
//
//    $sql = "SELECT email, pass from user where email = '$email' and pass = '$pass' ";
//
//    $result = mysqli_query($con, $sql);
//
//    if (mysqli_num_rows($result) > 0) {
//        $msg = "Login Success";
//        header("location: index.php");
//    } else {
//        // $err = 'Invalid name and password';
//        $msg = `Such bata bhul gaya naa ? ja forget kar le`. mysqli_error($con);
//    }
//
//}
//
//
//mysqli_close($con);
?>

<?php

include 'db.config.php';
session_start();

if (isset($_SESSION['user_email'])) {
    header("Location: index.php");
    exit();
}


//session_start(); Start the session

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL query using prepared statements
    $sql = "SELECT email, pass FROM user WHERE email = ?";
    $stmt = mysqli_prepare($con, $sql);

    // $sql = "SELECT pass FROM user WHERE email = '$email'";

    // $result = mysqli_query($con, $sql);
    // $row = mysqli_fetch_array($result);
    // $db_pass = $row['pass'];
    // if(mysqli_num_rows($result) > 0){
    //     if(password_verify($password, $db_pass)){
    //         //$msg = "Email and password correct.";
    //         header("Location: index.php");
    //         exit();
    //     }else{
    //         $msg = "Email and password is invalid.";
    //     }

    // }else{
    //     $msg = "Email and passwords not exist";
    // }

    if ($stmt) {
        // Bind the email parameter
        mysqli_stmt_bind_param($stmt, "s", $email);

        // Execute the statement
        mysqli_stmt_execute($stmt);

        // Bind the result to variables
        mysqli_stmt_bind_result($stmt, $db_email, $db_password);

        // Fetch the result
        if (mysqli_stmt_fetch($stmt)) {
            // Verify the password
            if (password_verify($password, $db_password)) {
                // Password is correct, set session variables
                $_SESSION['user_email'] = $db_email;

                //Redirect to index page
                 header("Location: index.php");
                exit(); // Make sure to exit after redirect
            } else {
                // Invalid password
                $msg = "Invalid password.";
            }
        } else {
            // No user found with that email
            $msg = "Invalid email or password.";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
    } else {
        $msg = "Database query failed: " . mysqli_error($con);
    }
}

// Close the database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Login</title>
</head>

<body>
    <div class="container">
        <form method="post">
            <h1>Login</h1>
            <div class="msg">
                <?php if (!empty($msg)) { ?>
                    <p><?php echo $msg; ?></p>
                <?php } ?>
            </div>
            <div class="fields">
                <div class="input-container">
                    <label for="email">Your Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Your email" required>
                </div>
                <div class="input-container">
                    <label for="password">Your Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter Your password" required>
                </div>
                <div class="btn">
                    <button type="submit">Login</button>
                </div>
                <div class="input-container">
                    <p>Already have an account? <span><a href="signup.php" class="login">Sign up</a></span></p>
                </div>
            </div>
        </form>
    </div>
</body>

</html>