<pre>


<?php

// echo 'hello';


echo "<h1>Type casting in php <br/>";


$int = 1234;
$float = 12.25;
$string = 'hello';
$boolean = true;
$array = [1, 2, 3, 4, 5, 6, 7];

$a = (int) $float;
$b = (int) $string;
$c = (int) $boolean;
$d = (int) $array;

echo '<br/>';
echo 'To int <br/>';

echo $a . ' ' . $b . ' ' . $c . ' ' . $d . ' ';

echo '<br/>';
echo '<br/>To float <br/>';

$a = (float) $int;
$b = (float) $string;
$c = (float) $boolean;
$d = (float) $array;

echo $a . ' ' . $b . ' ' . $c . ' ' . $d . ' ';
echo '<br/>';

$sum = $int + $float;
echo $sum;
echo '<br/>';
echo var_dump($sum);
echo '<br/>';

$sum = $int + (int) $float; // float to intiger force fullys
echo "Float to intiger force fullys : $sum ";


?>







</pre>