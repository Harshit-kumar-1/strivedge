<?php 


$file = fopen("files/first.txt","w") or die ("File is not created ");
fwrite($file,"This is first file to write");
echo "file writed";

fclose( $file );

