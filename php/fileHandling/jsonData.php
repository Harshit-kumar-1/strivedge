<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// $array = [
//     [   
//         'sno' => '1',
//         'name' => 'Harshit',
//         'age' => '20',
//         'phone' => '015266789',
//         'add' => 'Ahemdabad',
//         'state' => 'Gujarat',
//     ],
//     [
//         'sno' => '2',
//         'name' => 'Harsh',
//         'age' => '-',
//         'phone' => '-',
//         'add' => 'Ahemdabad',
//         'state' => 'Gujarat',

//     ],
//     [
//         'sno' => '3',
//         'name' => 'Viraj',
//         'age' => '-',
//         'phone' => '-',
//         'add' => 'Ahemdabad',    
//         'state' => 'Gujarat',
//     ],
//     [
//         'sno' => '4',
//         'name' => 'Kishor',
//         'age' => '-',
//         'phone' => '-',
//         'add' => 'Ahemdabad',    
//         'state' => 'Gujarat',
//     ],
//     [
//         'sno' => '5',
//         'name' => 'Mit',
//         'age' => '23',
//         'phone' => '-',
//         'add' => 'Ahemdabad',    
//         'state' => 'Gujarat',
//     ],
//     [
//         'sno' => '6',
//         'name' => 'Arjun',
//         'age' => '22',
//         'phone' => '0123456789',
//         'add' => 'Ahemdabad',    
//         'state' => 'Gujarat',
//     ],
//     [
//         'sno' => '7',
//         'name' => 'Kuldeep',
//         'age' => '-',
//         'phone' => '0123456789',
//         'add' => 'Ahemdabad',    
//         'state' => 'Gujarat',
//     ]

// ];


// $jsonData = json_encode( $array , JSON_PRETTY_PRINT);

$file = "files/data.json";

// $writeInFile = fopen($file , "w");

// fwrite($writeInFile, $jsonData);

// fclose($writeInFile);


$jsonfile = file_get_contents( $file );

$Databyjson = json_decode($jsonfile, true);

// foreach ($Databyjson as $data) {
//     // foreach ($data as $key => $value) {       
//         echo $data['name']."\n <br>";
//         // print_r($key." => ".$value);
//     // }

// }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
    <title>Json Data in Table</title>
</head>

<body>

    <div class="container">
        <div class="nav">
        <h1>Data show using JSON file</h1>
        
        <!-- <p>You want to logout <a href="logout.php">Logout</a></p> -->
        </div>

        <!-- Data read in another file  -->
        <div class="responsive-table">
            <table border="1" class="data-table">
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Contact</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Country</th>
                </tr>

                <?php if ($Databyjson){
                    foreach($Databyjson as  $data) {       
                        $sno = $data['sno'];
                        $name = $data['name'];
                        $age = $data['age'];
                        $contact = $data['phone'];
                        $address = $data['add'];
                        $state = $data['state']; ?>
                        <tr>
                            <td><?php echo htmlspecialchars(ucfirst($sno)); ?></td>
                            <td><?php echo htmlspecialchars(ucfirst($name)); ?></td>
                            <td><?php echo htmlspecialchars(ucfirst($age)); ?></td>
                            <td><?php echo htmlspecialchars(ucfirst($contact)); ?></td>
                            <td><?php echo htmlspecialchars(ucfirst($address)); ?></td>
                            <td><?php echo htmlspecialchars(ucfirst($state)); ?></td>
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