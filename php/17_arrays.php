<?php

/**
 * Types of Arrays in PHP
 * 
 * 1. Indexed Array - An array with numeric indexes.
 * 2. Associative Array - An array with key-value pairs.
 * 3. Multidimensional Array - An array containing other arrays.
 */

// Declaring arrays
$a = array(1, 5, 2, 6, 45, 889, 4);
$b = [1, 2, 3, 5, 6];

// Indexed Array
$array = array(2, 5, "11", 8, 9, 63, 4, 5);

// Modify value by index
$array[2] = 11;

// Output array using foreach loop
foreach ($array as $index) {
    echo "$index ";
}
echo "\n";

// Output array using for loop and indexing
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}
echo "\n";

// Associative Array
$array = ['name' => 'Harshit', 'age' => 20, 'address' => 'Ahmedabad'];

// Modify value using key
$array['name'] = "Harsh";

// Output associative array using foreach loop
foreach ($array as $key => $value) {
    echo "$key : $value ";
}
echo "\n";

// Multidimensional Array
$persons = [
    [
        'name' => 'harshit',
        'age' => 20,
        'add' => 'ahemdabad'
    ],
    [
        'name' => 'arjun',
        'age' => 21,
        'add' => 'ahemdabad'
    ],
    [
        'name' => 'govardhan',
        'age' => 20,
        'add' => 'mandsaur'
    ]
];

// Output multidimensional array using nested foreach loops
foreach ($persons as $person) {
    foreach ($person as $key => $value) {
        echo "$key = $value ";
    }
    echo "\n";
}

/**
 * Array Functions
 * 
 * count($array)                             - Returns the number of elements in an array.
 * unset($var)                               - Destroys the specified variable.
 * array_push($variable, 'item', 'item')     - Adds elements to the end of an array.
 * array_splice($var, index, howMuchRemove)  - Removes elements from an array.
 */

// count() function
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 7, 5, 1, 2, 4, 5, 4, 5, 1, 4, 2, 1, 5, 6, 1, 5, 6, 2, 5, 9];
echo count($arr);
echo "\n";

// array_push() function
$fruits = ['banana', 'apple', 'mango'];
array_push($fruits, 'pineapple', 'cherry', 'grapes');

// Output array after push
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
echo "\n";

// array_splice() function - Remove elements from array
array_splice($fruits, 3, 2); // Removes 'pineapple' and 'cherry'

// Output array after splice
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
echo "\n";

// Adding more elements to the array
array_push($fruits, "Strawberry", "Blueberry", "Kiwi", "Peach", "Watermelon", "Papaya", "Pomegranate");

// Remove element at index 3 ('grapes')
array_splice($fruits, 3, 1);

// Print the array after removal
print_r($fruits);

// Remove all elements after index 2
array_splice($fruits, 3);
print_r($fruits);

// Output array after modifications
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
echo "\n";

// Add elements back to the array
array_push($fruits, "Strawberry", "Blueberry", "Kiwi", "Peach", "Watermelon", "Papaya", "Pomegranate");

// unset() function - Remove element by index
unset($fruits[2]);

// Add element to a specific index
$fruits[2] = "Grapes";

// Output the array after modification
print_r($fruits);
echo "\n Re indexing of values";

// Reindex the array using array_values()
$fruits = array_values($fruits);
print_r($fruits);


// Output the array with foreach
foreach ($fruits as $fruit) {
    echo $fruit . " ";
}
echo "\n";

// New array and modification example
$foo = ['blue', 'pink', 'yellow', 'gray'];
$foo[2] = 'red'; // Replace 'yellow' with 'red'
print_r($foo);
echo "\n";

// Remove an item from the associative array
unset($persons[1]); // Removes the second person
print_r($persons);
echo "\n";

// Associative array example
$fruitColors = [
    "Strawberry" => "Red",
    "Blueberry" => "Blue",
    "Kiwi" => "Green",
    "Peach" => "Orange",
    "Pomegranate" => "Red"
];

// Reversed associative array
$reversedFruitColors = [
    "Red" => "Pomegranate",
    "Blue" => "Blueberry",
    "Green" => "Kiwi",
    "Orange" => "Peach",
];

// Remove 'Red' key from reversed array
unset($reversedFruitColors['Red']);

// Difference between arrays
$newFruitColors = array_diff($fruitColors, ['Red', 'Green']);

print_r($reversedFruitColors);
print_r($newFruitColors);

echo "\n";



// array_pop(); // delete element in last indexing

array_pop($fruitColors);

print_r($fruitColors);

echo "\n";

// array_shift() // remove first item in array

$fruitColors = [
    "Strawberry" => "Red",
    "Blueberry" => "Blue",
    "Kiwi" => "Green",
    "Peach" => "Orange",
    "Pomegranate" => "Red"
];

array_shift($fruitColors);

print_r($fruitColors);

// array_unshift //

array_unshift($foo, "Red" , "Blue" ,  "Green" );

print_r($foo);


// array_reverse() 

$array = [1,2,3,4,5,6,7,8,9];

$array = array_reverse($array);
print_r($array);

echo "\n";

// array_search()

$key =  array_search("red", $foo);
$color = array_search("Blue", $fruitColors);

print_r($key);
print_r($color);

echo "\n";

// in_array()

$is_exist = in_array("Green", $fruitColors) ? "True":" false";

print_r($is_exist);

echo "\n";


// sort()

$fruits = ['Banana', 'Apple', 'Mango',"Strawberry", "Blueberry", "Kiwi", "Peach", "Watermelon", "Papaya", "Pomegranate"];

sort($fruits);
print_r($fruits);

// rsort()

rsort($fruits);
print_r($fruits);


// ksort
$fruitColors = [
    "Strawberry" => "Red",
    "Blueberry" => "Blue",
    "Kiwi" => "Green",
    "Peach" => "Orange",
    "Pomegranate" => "Red"
];

ksort($fruitColors);
print_r($fruitColors);

// krsort

krsort($fruitColors);
print_r($fruitColors);




// asort();

asort($fruitColors);
print_r($fruitColors);


// arsort();

arsort($fruitColors);
print_r($fruitColors);

// array-unique

$uniqueFruitsColor =  array_unique($fruitColors);
print_r($uniqueFruitsColor);

// array_map();
$fruits = array_map(function ($fruit) {
    echo $fruit ."\n";
}, $fruitColors);

print_r($fruits);


$numbers = [2,4,5,6,8,9,3,5,6];

$sqr = array_map(function ($num) {
    return $num * $num;
}, $numbers);

print_r($sqr);


$ar = [
    12,[5,3],6
];

$s = array_map(function ($ar) {
    return $ar + $ar;
},$ar);

print_r($s);

echo "\n";



$evenNumber = array_filter($numbers, function ($num) {
    return $num % 2 == 0;
});

print_r($evenNumber);


$persons = [
    'peter' => 18,
    'huru' => 19,
    'zeas' => 21,
    'aadhya' => 15,
    'Zoya' => 16,
    'samarth' => 50,
    'samadhan' => 12,
];

$voters = array_filter($persons, function ($person) {
    return $person >= 18;
}, ARRAY_FILTER_USE_BOTH);


print_r($voters);


echo "\n";
?>