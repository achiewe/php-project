<?php

// Create array
$fruits = ["Banana", "Apple", "orange"];

echo "<pre>";
var_dump($fruits);
echo "</pre>";


// Print the whole array



// Get element by index

$fruits[2] = "anana";

echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Set element by index

// Check if array has element at index 2



echo "<pre>";
var_dump(isset($fruits[2]));
echo "</pre>";



// Append element

$fruits[] = "Mango";


echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Print the length of the array

echo count($fruits);


// Add element at the end of the array
array_push($fruits, "spsp");
$fruits[] = "Mango";


// Remove element from the end of the array
echo array_pop($fruits);

echo "<pre>";
var_dump($fruits);
echo "</pre>";

// Add element at the beginning of the array
array_unshift($fruits,"apple");

echo "<pre>";
var_dump($fruits);
echo "</pre>";


// Remove element from the beginning of the array

echo array_shift($fruits);

echo "<pre>";
var_dump($fruits);
echo "</pre>";


// Split the string into an array

$string = "Banana,Apple,Peach";
$fruits2 = explode(",", $string);

echo "<pre>";
var_dump($fruits2);
echo "</pre>";

// Combine array elements into string
echo implode("$", $fruits2)."<br>";



// Check if element exist in the array

var_dump(in_array("Apple", $fruits2)); // true
var_dump(in_array("souce", $fruits2)); //false


// Search element index in the array
echo array_search("Apple", $fruits2)."<br>";


// Merge two arrays
$newArray = array_merge($fruits, $fruits2);
$newArray = [...$fruits, ...$fruits2];

echo "<pre>";
var_dump($newArray);
echo "</pre>";


// Sorting of array (Reverse order also)


echo "<pre>";
var_dump($fruits2);
echo "</pre>";


sort($fruits2);

echo "<pre>";
var_dump($fruits2);
echo "</pre>";

//Filter, map, reduce of array

$number = [1, 2, 3, 4, 5, 6, 7, 8];
$evens = array_filter($number, fn($n) => $n % 2 === 0);


echo "<pre>";
var_dump($evens);
echo "</pre>";

$newArray = array_map(fn($n) => $n + 1, $number);


echo "<pre>";
var_dump($newArray);
echo "</pre>";


$sum = array_reduce($number, fn($carry, $n) => $carry + $n);

echo $sum;
// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array

$person = [
    "name" => "achi",
    "age" => "2",
    "surname" => "mamukashvili",
    "hobbies" => ["yomari"],

];



echo "<pre>";
var_dump($person);
echo "</pre>";






// Get element by key


echo $person['name'];



// Set element by key

$person["name"] = "giorgi";

echo "<pre>";
var_dump($person);
echo "</pre>";

// Null coalescing assignment operator. Since PHP 7.4

// Check if array has specific key

echo "<pre>";
var_dump(isset($person['age']));
echo "</pre>";

// Print the keys of the array
echo "<pre>";
var_dump(array_keys($person));
echo "</pre>";


// Print the values of the array

echo "<pre>";
var_dump(array_values($person));
echo "</pre>";

// Sorting associative arrays by values, by keys

ksort(($person));
echo "<pre>";
var_dump($person);
echo "</pre>";


// Two dimensional arrays

$todoes = [
    ['title' => 'Todo 1', 'completed' => true],
    ['title' => 'Todo 2', 'completed' => false],
];

echo "<pre>";
var_dump($todoes);
echo "</pre>";