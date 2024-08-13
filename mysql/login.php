<?php 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


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


    $stmt = mysqli_prepare($con, "SELECT pass from user where email = ?");
    mysqli_stmt_bind_param($stmt,"s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) > 0){

        $row = mysqli_fetch_array($result);
        $db_pass = $row['pass'];

        if(password_verify($password, $db_pass)){
            $_SESSION['user_email'] = $email;
            header("Location: index.php");
            exit();
        }else{
            $msg = "Email and Password is wrong";
        }
        
    }else{
        $msg = "Email is not Exist in db";
    }

    mysqli_stmt_close($stmt);
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