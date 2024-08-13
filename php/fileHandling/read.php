<?php 


$file  = fopen("files/first.txt", "r") or die("File is not open");

readfile("files/first.txt");
echo "<br/>";
echo fgets($file);

fclose($file);