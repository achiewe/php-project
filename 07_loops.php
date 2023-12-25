<?php

// while

// while (true) {
    
// }

// Loop with $counter

$counter = 0;

while($counter < 10) {
    echo "printing counter:$counter"."<br>";
    $counter++;
};



// do - while
$counter = 0;

do{
    echo "printing counter:$counter"."<br>";
    $counter++;

} while($counter < 10);


// for

for($i = 0; $i < 10; $i++){
    echo "printing counter:$i"."<br>";
}

// foreach
$fruits = ["Banana", "apple", "Orange"];
foreach($fruits as $i => $fruit) {
    echo $i." ".$fruit."<br>";
}


// Iterate Over associative array.

$person = [
    'name' => "zura",
    "surname" => "arsaada"
];

foreach($person as $key => $value) {
    echo $key." ".$value."<br>";
    if($key === "name"){
        break;
    }
}