<?php 
$pdo = new PDO("mysql:host=localhost;port=3306;dbname=products_crud", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 

$statement = $pdo->prepare("SELECT * FROM products ORDER BY create_date DESC");
$statement->execute();



echo "<pre>";
var_dump($_GET);
echo "</pre>";