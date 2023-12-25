<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// echo $a + $b + $c;

// Arithmetic operations

// Assignment with math operators
// echo $a += $b;

// Increment operator

echo ++$a."<br>";
// Decrement operator

// Number checking functions
is_float(1.25);
var_dump(is_numeric("3.45"))."<br>";

// Conversion

$strNumber = "12.34";
$number = (float)($strNumber);
var_dump($number);

// Number functions

echo abs(-15);
echo pow(2, 3);


// Formatting numbers

$number = 123456789.12345;
echo number_format($number, 2, ".", ",");


// https://www.php.net/manual/en/ref.math.php
