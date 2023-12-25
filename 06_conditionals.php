<?php

$age = 24;
$salary = 300000;

// Sample if
if($age > 30 || $salary === 300000){
    echo "more than 30";
} elseif ($age > 25) {
    echo "more than 25";
} else {
    echo "Uknown";
}


if($age === "24"){
echo "true";
}
 
// Without circle braces

// Sample if-else

// Difference between == and ===

// if AND

// if OR

// Ternary if
echo $age < 22 ? "young" : "old";

echo $age ?: 18; // if age exist then write age if not write 18


// Short ternary

// Null coalescing operator

$var = isset($name) ? $name : "Jhon";   // this is same as below $var
$var = $name ?? "Jhon"; // this is new writing.

echo "<pre>";
var_dump($var);
echo "</pre>";

// Null coalescing assignment operator.

$person = [
    'name' => 'john'
];


if(isset($person['name'])){        // this is same as below example
    $person['name'] = "uknown";
}

 $person['name'] ??= "uknown";   // this is new writing.


// switch

$userRole = 'admin'; //editor, user

switch ($userRole) {
    case "admin":
        echo "you can do anything";
        break;
    case "editor":
        echo "editor";
        break;
    case "user":
        echo "user";
        break;
        default:
      echo "invalid role";
}
