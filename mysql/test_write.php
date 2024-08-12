<?php
$file = '/opt/lampp/htdocs/php/mysql/images/testfile.txt';

if (is_writable(dirname($file))) {
    echo "Directory is writable.";
    if (file_put_contents($file, "Test")) {
        echo "File written successfully.";
    } else {
        echo "Failed to write file.";
    }
} else {
    echo "Directory is not writable.";
}
?>
