<pre>


<?php

echo "<h1>PHP have Operators like </h1>";
echo "<ul>
            <li> Arithematic operators</li>
            <li> Assignment operators</li>
            <li> Conditional operators</li>
            <li> Comparison operators</li>
            <li> Logical operators</li>
            <li> String operators</li>
            <li> Array operators</li>
        </ul>
    ";

echo "<br/>";



echo "<h3>Conditional Operators</h3>";
echo "<ul>
            <li> ? : - Ternary Operator</li>
            <li> ? ? - Null Coalessing</li>
        </ul>
    ";

// ternary operator 
$a = 18;

$isVoter = $a < 18 ? "Not voter" : "Voter";

print_r($isVoter);

echo "<br/>";

//Null coalescing
//used for if a value is not exist so it show default value which we difine after auestion marks or null coalescing
// $harshit = "harshit";

$name = $harshit ?? "default value showing by ?? bcz \$harshit is not define";
echo "$name";



echo "<h3>String Operators</h3>";

$name = "Harshit";
$lastName = " Kumar";

echo $name . $lastName; // string concatination
echo "<br>";


$name .= $lastName; // concatinate assignment
echo "$name";

echo "<br>";

$name = "Harshit";
$fullName .= $name . $lastName; // string concatination and concatinat assignment 
echo "$fullName";


echo "<br>";

echo "<h3>Array Operators</h3>";

$Array1 = array("a" => "red", "b" => "green");
$Array2 = array("c" => "blue", "d" => "yellow");

print_r($Array1 + $Array2);

//same as above but above array are seprate value not change but below $array3 have both array values
$array3 = $Array1 + $Array2;
print_r($array3);

var_dump($Array1 == $Array2); // retrun false bcz 1 and 2 Arrays are not same have defrant key and values equaltoequalto return true if both array have same key and same value atherwise false.

var_dump($Array1 != $Array2); // return true bcz 1 and 2 Arrays are not same have defrant key and values notequalto return true if value not same


$same1 = array("a" => "red", "b" => "green");
$same2 = array("a" => "red", "b" => "green");

var_dump($same1 === $same2); // Identical another words strictly equal to check if arrays have same key same value and their types should be same so return true else false

?>




</pre>