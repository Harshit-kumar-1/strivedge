<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



session_start();
require 'db.config.php';

if (!isset($_SESSION['user_email'])) {
    // User is not logged in, redirect to login page
    header("Location: login.php");
    exit();
}

$email = $_SESSION['user_email'];

$sql = "SELECT * FROM customer";
$result = mysqli_query($con, $sql);

$user_res = mysqli_query($con, "SELECT name,image FROM user WHERE email ='$email'");
$user_row = mysqli_fetch_assoc($user_res);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Home Page</title>
</head>

<body>

    <div class="container-index">
        <div class="nav">
        <h1>Welcome to Index Page</h1>
        <div class="profile">
            <details name="accordion">
                <?php
                if ($user_row && !empty($user_row['image'])) {
                    ?>
                    <summary>
                        <img src="images/<?php echo htmlspecialchars($user_row['image']); ?>"
                            alt="profile picture" class="pro-pic" width="40px" style="border-radius:50%"><?php $user_row['name']?>
                        </summary>
                <?php } else { ?>
                    <summary><img src="images/default.png" alt="Profile" class="pro-pic"></summary>
                <?php } ?>
                <span><a href="myprofile.php">My Profile</a></span>
                <a href="logout.php"><span>Logout</span></a>
            </details>
        </div>
        <!-- <p>You want to logout <a href="logout.php">Logout</a></p> -->
        </div>
        <div class="responsive-table">
            <table border="1" class="data-table">
                <tr>
                    <th>Sno.</th>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                </tr>

                <?php if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $sno = $row['sno'];
                        $cname = $row['cname'];
                        $contact = $row['contact'];
                        $address = $row['address'];
                        $city = $row['city'];
                        $country = $row['country']; ?>
                        <tr>
                            <td><?php echo htmlspecialchars(ucfirst($sno)); ?></td>
                            <td><?php echo htmlspecialchars(ucfirst($cname)); ?></td>
                            <td><?php echo htmlspecialchars(ucfirst($contact)); ?></td>
                            <td><?php echo htmlspecialchars(ucfirst($address)); ?></td>
                            <td><?php echo htmlspecialchars(ucfirst($city)); ?></td>
                            <td><?php echo htmlspecialchars(ucfirst($country)); ?></td>
                        </tr>
                    <?php }
                } else { ?>
                    <tr>
                        <td colspan="6">No records found</td>
                    </tr>
                <?php } ?>
            </table>
        </div>
    </div>
</body>

</html>