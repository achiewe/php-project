<?php

// What is a variable

// Variable types

// Declare variables
$name = "achiko";
$age = 23;
$isMail = true;
$height=1.85;
$salary=null;

// Print the variables. Explain what is concatenation
echo $name."<br/>";
echo $age."<br/>";
echo $isMail."<br/>";
echo $height."<br/>";
echo $salary."<br/>";

// Print types of the variables
echo gettype($name)."<br/>";
echo gettype($age)."<br/>";
echo gettype($isMail)."<br/>";
echo gettype($height)."<br/>";
echo gettype($salary)."<br/>";

// // Print the whole variable

var_dump($name, $age, $isMail, $height, $salary)."<br/>";

$name = true;
$age = "achi";

 is_string($name)."<br>";
var_dump(isset($name))."<br>";

// Change the value of the variable

// Print type of the variable

// Variable checking functions

// Check if variable is defined

// Constants

define("geno", 3.14);
echo geno;

// Using PHP built-in constants
