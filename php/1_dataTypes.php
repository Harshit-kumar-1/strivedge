<?php

$x = 5;
$y = 2;
$z = $x + $y;

echo "x + y = $z";
echo "<p>x + y = $z</p>";
echo '<p>x + y = $z</p>';
echo '<p>x + y = ' . $z . '</p>';

print 'hello world $z <br/>';
print "hello world $z <br/><br/>";


//Data Types 
$number = 10; //number or integer
$float = 10.02; // float or double
$words = "I am a String"; //string
$isTrue = true; //boolean
$Array = array("volvo", "BMW", "audi", "lamborgini", );
$Nothing; // value not assign yet same as value assign $valueNull below
$valueNull = null;


echo 'The type of  $number ';
var_dump($number);
echo '<br/> The type of  $float  ';
var_dump($float);
echo '<br/> The type of  $words ';
var_dump($words);
echo '<br/> The type of  $isTrue ';
var_dump($isTrue);
echo '<br/> The type of  $Array ';
var_dump($Array);
echo '<br/> The type of  $Nothing ';
var_dump($Nothing);
echo '<br/> The type of  $valueNull variable <br/>';
var_dump($valueNull);
echo '<br/>';
echo '<br>';
echo '<br>';

?>