<?php

session_start();
require 'db.config.php';
$email = $_SESSION['user_email'];
// echo $email;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (!isset($_SESSION["user_email"])) {
    header("Location: login.php");
    exit();
} else {

    $sql = "SELECT * FROM user where email = '$email' ";

    // echo $sql;
    $res = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($res);

    if ($row > 0) {
        // echo 'data fetched';
    } else {
        // echo 'data not fetched';
    }

}

?>


<?php



if ($_SERVER['REQUEST_METHOD'] == "POST") {


    $name = ucfirst($_POST["name"]);
    $gender = ucfirst($_POST["gender"]);
    $age = ucfirst($_POST["age"]);
    $phone = ucfirst($_POST["phone"]);
    $address = ucfirst($_POST["address"]);
    // $pass = password_hash($pass, PASSWORD_DEFAULT);

    $image = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = '/opt/lampp/htdocs/php/mysql/images/' . basename($image);


    // echo "Temp file path: " . $tempname . "<br>";
    // echo "Target folder path: " . $folder . "<br>";

    // echo $name,$gender,$age,$phone,$address;
    echo $image;

    $values = [$name, $gender, $age, $phone, $address]; // $image,$email, $pass
    $checked = false;

    foreach ($values as $value) {
        if (!empty($value)) {
            $checked = true;
        } else {
            $checked = false;
        }
    }

    if ($checked) {
        
        $query = "SELECT `image` FROM `user` WHERE email = '$email'";
        $result = mysqli_query($con, $query);
        $row = mysqli_fetch_assoc($result);
        $old_image = $row['image'];
        $old_image_path = '/opt/lampp/htdocs/php/mysql/images/' . $old_image;
        
        if (!empty($image)) {
            $upd = "UPDATE `user` SET `name`='$name',`image`='$image',`gender`='$gender',`age`='$age',`phone`='$phone',`address`='$address' WHERE email = '$email'"; //,`email`='$email',`pass`='$pass'
        } else{
            $upd = "UPDATE `user` SET `name`='$name', `gender`='$gender', `age`='$age', `phone`='$phone', `address`='$address' WHERE email = '$email'";
        }

        if (mysqli_query($con, $upd)) {
            // if(file_exists($old_image_path)) {
            //     unlink($old_image_path);
            // }

            if(move_uploaded_file($tempname, $folder)) {
                $msg = "Data and image updated successfully.";
            } else {
                $msg = "Data updated, but failed to upload the new image.";
            }
        } else {
            $msg = "Data updated successfully.";
        }
            header("Location: index.php");
    } else {
            // $msg = "Error adding user : " . mysqli_error($con);
            $msg = "Hey prabhu ye kya huaa : " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Update Profile</title>
</head>

<body>
    <div class="container">
        <form method="post" enctype="multipart/form-data">
            <h1>Update Profile</h1>
            <div class="msg">
                <?php if (!empty($msg)) { ?>
                    <p>
                        <?php echo $msg; ?>
                    </p>

                <?php } ?>
            </div>
            <div class="fields">
                <div class="input-container">
                    <label for="name">Change Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter Your name"
                        value="<?php echo $row['name'] ?>">
                </div>
                <div class="input-container">
                    <label for="file">Change Picture</label>
                    <input type="file" name="image" id="file" value="<?php //echo $row['$image'] ?>"
                        placeholder="Select Your Profile Picture">
                </div>
                <div class="input-container">
                    <label for="gender">Change Gender</label>
                    <input type="text" name="gender" id="gender" value="<?php echo $row['gender'] ?>"
                        placeholder="Enter Your gender" required>
                </div>
                <div class="input-container">
                    <label for="age">Change Age</label>
                    <input type="text" name="age" id="age" value="<?php echo $row['age'] ?>" placeholder="Enter Your age"
                        required>
                </div>
                <div class="input-container">
                    <label for="phone">Change Phone</label>
                    <input type="text" name="phone" id="phone" value="<?php echo $row['phone'] ?>"
                        placeholder="Enter Your phone" required>
                </div>
                <div class="input-container">
                    <label for="address">Change Address</label>
                    <input type="text" name="address" id="address" value="<?php echo $row['address'] ?>"
                        placeholder="Enter Your address" required>
                </div>
                <div class="input-container">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo $row['email'] ?>"
                        placeholder="Enter Your email" disabled>
                </div>
                <div class="input-container">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" value="<?php echo $row['pass'] ?>"
                        placeholder="Enter Your password" disabled />
                </div>
                <div class="btn">
                    <button type="Submit">Update</button>
                </div>

            </div>
        </form>
    </div>

</body>

</html>