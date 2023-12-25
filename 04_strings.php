<?php

// Create simple string
$name = 'achi';
$string1 = 'hello '.$name.'. I am 28';
$string2 = "wharapp $name I am 28";

echo $string1."<br>";
echo $string2;
// String concatenation
echo "hello "."world "."achikoii"."<br>";


// String functions
$string = '       Hello World      ';


// Multiline text and line breaks
$longText = "Hello aasdasd qdqwdqwd asdadasdqwd dqqdqwd asdasdsa";

echo nl2br($longText);
// Multiline text and reserve html tags

// https://www.php.net/manual/en/ref.strings.php