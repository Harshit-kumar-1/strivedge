<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'db.config.php';
$msg = " ";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $imgName = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = '/opt/lampp/htdocs/php/mysql/images/' . basename($imgName);
    $file_ext = strtolower(pathinfo($imgName, PATHINFO_EXTENSION));
    $isOkay = 1;
    // Log the file paths for debugging
    // error_log("Temp file path: $tempname");
    // error_log("Target folder path: $folder");

    //file type except only jpg png
    // echo $file_ext;
    
    if($file_ext != "jpg" && $file_ext != "png" && $file_ext != "jpeg") {
        $msg = "File is another type ";
        // $isOkay = 0;
    }
    
    // $check = getimagesize($_FILES['image']['name']);
    // echo $check;
    // if($check == false){
    //     $msg += "File is not an image";
    //     $isOkay = 0;
    // }

    // $size = $_FILES['image']['name'] < 500000000000000000;
    // echo var_dump($size);
    //file type
    // if( $_FILES['image']['name'] > 500000000){
    //     $msg .= " upload image less then 5mb ";
    //     $isOkay = 0;
    // }

    if($isOkay == 1){
        // Insert the image name into the database
        $query = mysqli_query($con, "INSERT into image(image) values ('$imgName')");

        if ($query == FALSE) {
            error_log("Database query failed: " . mysqli_error($con));
            echo "Database insertion failed.";
            exit();
        }

        // Attempt to move the uploaded file
        if(!file_exists($folder)){
            if (move_uploaded_file($tempname, $folder)) {
                $msg = "Image is Uploaded";
            } else {
                // Provide more details about the failure
                error_log("Failed to upload file. Error: " . print_r($_FILES['image'], true));
                echo "Not uploaded. Error: " . $_FILES['image']['error'];
            }
        }
    }else{
        $msg .= ' File is not Uploaded ';
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
    <title>Upload file</title>
</head>
<body>
    
    <div>
        <form method="post" enctype="multipart/form-data">
            <input type="file" name="image" id="file" placeholder="upload image" required/>
            <br><br>
            <button type="submit">Submit</button>
            
        </form>
    </div>
    <div>
                <?php echo $msg ;?>
            </div>
    <div class="contain-img">
            
        <?php
        $res = mysqli_query($con, 'SELECT * FROM image');
        while ($row = mysqli_fetch_assoc($res)) {
            ?>
            <img src="images/<?php echo htmlspecialchars($row['image']); ?>" alt="images">
        <?php } ?>
    </div>
        
        
</body>
</html>
