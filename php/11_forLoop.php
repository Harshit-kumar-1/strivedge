<pre>

<?php

//multiplication table
$table = 5;

for ($i = 1; $i <= 10; $i++) {

    if ($i == 5) {
        echo "50 <br/>";
        continue;
    }

    echo "$i * $i = " . $i * $table . "<br/>";

}

echo "<br/>";
echo "<br/>";
echo "<br/>";
echo "<br/>";


// sum of all even number 1 to 100
for ($j = 1; $j <= 100; $j++) {
    if ($j % 2 == 0) {
        $sum = $sum + $j;
        // echo $j;
    } else {
        continue;
    }
}
echo "$sum is Sum of All Even numbers 1 to 100 <br/>";



// Array traversing

$array = array(4, 5, 6, 1, 2, 3, 7, 8, 9, 0);
$even = [];
$odd = [];


for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array) - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            // Swap the elements
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
        // echo $j;
    }
}

echo "Sort Array : ";
foreach ($array as $value) {
    echo $value . ' ';
}


echo "<br/>";

for ($i = 0; $i < count($array); $i++) {

    //even and odd number in array 
    if ($array[$i] % 2 == 0) {
        $even[] = $array[$i];
    } else {
        $odd[] = $array[$i];
    }

}

// var_dump($even);
// var_dump($odd);

echo "Even numbers : ";

foreach ($even as $value) {
    echo $value . ' ';
}
echo "<br/>";

echo "Odd numbers : ";


foreach ($odd as $value) {
    echo $value . ' ';

}


?>

</pre>