<?php

// Function which prints "Hello I am Zura"'

function writeSomething($name) 
{
    echo "hello i am $name";
}

writeSomething("gena");
writeSomething("vajiko");

// Function with argument

// Create sum of two functions
function sum($a, $b)
{
    echo $a + $b;
};

sum(12, 175);
// Create function to sum all numbers using ...$nums

function sumNum(...$nums)
{
    echo "<pre>";
    var_dump($nums);
    echo "</pre>";
}

echo sumNum(5, 6, 7, 8, 9);


// Arrow functions
