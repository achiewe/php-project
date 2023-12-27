<?php
   $title = $_POST["title"];
   $description = $_POST["description"];
   $price = $_POST["price"];


   $image = $_FILES['image'] ?? null;

   $imagePath = '';

   if(!is_dir(__DIR__.'/public/images')) {
       mkdir(__DIR__.'/public/images');
   }

   if($image){
       if($product["image"]){
           unlink(__DIR__.'public/'.$product["image"]);
       }
       $imagePath='images/'.randomString(8).'/'.$image['name'];
       mkdir(dirname(__DIR__.'/public/'.$imagePath));
       move_uploaded_file($image['tmp_name'], 'images/'.$image['name']);
   }

   if(!$title){
       $errors[] = 'Product title is required';
   }

   if(!$price){
       $errors[] = 'Product price is required';
   }

