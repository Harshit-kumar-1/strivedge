<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$file = fopen("files/first.txt", "a+") or die("file is not readable");

// echo fread($file, filesize("files/first.txt"));
// $i = 1;

$details = array('name' => 'Harshit', 'age' => '20', 'Address' => 'sanoma palace Ahemdabad', 'Work at' => 'Strivedge Technolabs pvt.ltd.');

foreach ($details as $keys => $value) {
    // fwrite($file,"The Number of Line is $i \n");
    // echo fread($file, filesize("files/first.txt"));
    fwrite($file, "The $keys is $value \n");
}


rewind($file);

// echo $file;
// echo "hello";
while (!feof($file)) {
    // echo"hel";
    $line = fgets($file);
    echo $line;
    echo "<br>";
}
// echo"hel";


rewind($file);

$object = [
    [
        'name' => 'Harshit',
        'age' => '20',
        'phone' => '0123456789',
        'add' => 'Ahemdabad',
    ],
    [
        'name' => 'Kuldeep',
        'age' => '20',
        'phone' => '0123456789',
        'add' => 'Ahemdabad',

    ],
    [
        'name' => 'Viraj',
        'age' => '20',
        'phone' => '0123456789',
        'add' => 'Ahemdabad',    
    ],
    [
        'name' => 'Kishor',
        'age' => '20',
        'phone' => '0123456789',
        'add' => 'Ahemdabad',    
    ],
    [
        'name' => 'Mit',
        'age' => '20',
        'phone' => '0123456789',
        'add' => 'Ahemdabad',    
    ],
    [
        'name' => 'Arjun',
        'age' => '20',
        'phone' => '0123456789',
        'add' => 'Ahemdabad',    
    ]
];



foreach($object as $values){
    foreach ($values as $key => $value) {
        fwrite($file, "$key $value.\n");
    }
}

rewind($file);

while(!feof($file)){
    $line = fgets($file);
    echo $line."<br>";
}

fclose($file);

