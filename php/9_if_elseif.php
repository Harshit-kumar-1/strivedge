<?php

// if-elseif

/** 
 *  $age= 12 ;
 *  $age = 40;
 *  $age = 100;
 *  $age = 400;
 * 
 */


$age = 40;


if ($age > 0 && $age <= 12) {
    echo "You are Child !";
} elseif ($age < 20) {
    echo "You are Teenage !";
} elseif ($age <= 40) {
    echo "You are Younger";
} elseif ($age > 40 && $age <= 100) {
    echo "You are old !!";
} elseif ($age > 100) {
    echo "You are Too Old !!";
} else {
    echo "Age is always positive";
}

echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";



$age2 = 40;

// nested if else

if ($age2 > 0) {
    if ($age2 <= 12) {
        echo "You are child";
    } elseif ($age2 < 20) {
        echo "You are Teenage !";
    } elseif ($age2 < 40) {
        echo "You are Younger";
    } elseif ($age2 > 40 && $age2 <= 100) {
        echo "You are old !!";
    } elseif ($age2 > 100) {
        echo "You are Too Old !!";
    } else {
        echo "Your age is 40 !!. After some time  You are old.";
    }
} else {
    echo "Do not put Negative or Zero!!. Try Poitive Value";
}



?>