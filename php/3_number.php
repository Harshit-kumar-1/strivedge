<pre>

<?php


$number = 12500;

echo var_dump($number);

echo var_dump(is_int($number));

echo '<br>';

$float = 12.2023516548;

echo var_dump($float);
echo '<br>';
echo var_dump(is_float($float));
echo '<br>';

echo var_dump(is_int($float));
echo '<br>';

echo '<br>';

$notANumber = acos(8);

echo var_dump(is_nan($notANumber));
echo '<br>';

$numericNumber = "12563";

echo var_dump($numericNumber);
echo var_dump(is_numeric($numericNumber));
echo '<br>';
// is_numeric() retrun true if a quotes containt only number else false.

$numericString = "256A";

echo var_dump(is_numeric($numericString));

echo '<br>';

echo var_dump(is_finite($numericNumber)); // true if number is not infinite

echo var_dump(is_infinite($numericNumber)); // true if number is infinite


?>

</ppr