<?php

$url = 'https://jsonplaceholder.typicode.com/users';
// // Sample example to get data.
// $resource = curl_init();
// curl_setopt($resource, CURLOPT_URL, $url);
// curl_setopt($resource, CURLOPT_RETURNTRANSFER, true);
// $result = curl_exec($resource);
// // curl_close($resource);
// echo $result;

// // Get response status code
// $responseCode = curl_getinfo($resource, CURLINFO_HTTP_CODE); // return status code
// echo $responseCode;
// // set_opt_array



// Post request
$user = [
    "name" => "achi",
    "surname" => "mamukashvili",
    "email" => "mamukashviliachi706@gmail.com",
];


$resource = curl_init($url);
curl_setopt_array($resource, [
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($user),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => ['content-type: application/json' ]
]);

$result = curl_exec($resource);
echo $result;