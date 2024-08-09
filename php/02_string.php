<?php

echo "<h1>String Methods Demonstration</h1>";

echo '<br>';
echo '<br>';

// String methods

// '<div>'.

$string = "      This is string where i perform all methods    ";

echo 'strlen($string) = ' . strlen($string); /* retutn length of string  */
echo '<br/>';
echo '<br>';
echo '<br>';
echo 'str_word_count(($string)) = ' . str_word_count($string); /* retrun the count of words in the string */
echo '<br/>';
echo '<br>';
echo '<br>';
echo 'strpos($string, "all") = ' . strpos($string, 'all');/* return number where string found */
echo '<br/>';
echo '<br>';
echo '<br>';
echo 'strtoupper($string) = ' . strtoupper($string); /** change string to upper case */
echo '<br>';
echo '<br>';
echo '<br>';
echo 'strtolower($string) = ' . strtolower($string); /** change string to lower case */
echo '<br>';
echo '<br>';
echo '<br>';
echo 'str_replace("all","replace",$string) = ' . str_replace('all', 'replace', $string); /** replace first argument to second argument */
echo '<br>';
echo '<br>';
echo '<br>';
echo 'strrev($string) = ' . strrev($string); /** reverse the string */
echo '<br>';
echo '<br>';
echo '<br>';
echo 'trim($string) = ' . trim($string); /** trim white space starting and ending */
echo '<br>';
echo '<br>';
echo '<br>';

// change string as array and argument should be seprater where break string
$changeArray = explode(" ", $string);
print_r($changeArray);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
// Without trim method it will provide all space indexing and convert them also a part of array.
// but using trim method it will remove stating and ending spaces so it will only provide indexing of strings

$change = explode(" ", trim($string));
print_r($change);
echo '<br/>';
echo '<br>';
echo '<br>';
echo '<br>';




echo substr($string, 20);
echo '<br>';
echo substr($string, 20, 6);
echo '<br>';
echo substr($string, -11, 6);


echo '<br>';
echo '<br>';
echo '<br>';

// backslash is escape charector which escape iligal strings typo
$escape = "This is Demonstrate \"escape\" Charectors in PHP.";
echo $escape;

echo '<br>';
echo '<br>';


// $tab = "provide a tab\tspace in string";

// "<pre>echo $tab</pre>"

echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
// '</div>'

?>