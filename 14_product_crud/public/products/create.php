<?php 
require_once "../../function.php";
require_once "../../database.php";
 
// echo randomString(8)."<br>";
// echo randomString(8)."<br>";
// echo randomString(8)."<br>";
// echo randomString(8)."<br>";
// echo randomString(8)."<br>";
// echo randomString(8)."<br>";

// echo '<pre>';
// var_dump($_FILES);
// echo'</pre';
// exit;



$errors = [];

$title='';
$description='';
$price='';


  $product = [
      'image' => ""
  ];


if($_SERVER['REQUEST_METHOD'] === "POST"){

    require_once "../../validate_product.php";

    if(empty($errors)){
        $statement = $pdo->prepare("INSERT INTO products (title, image, description, price, create_date)
        VALUES (:title, :image, :description, :price, :date)");
        
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':date', date('Y-m-d H:i:s'));
        
        $statement->execute();
        header('Location: index.php');
        }
    }


    // echo "<pre>";
    // var_dump($errors);
    // echo "</pre>";


?>



<?php require_once "../../views/partials/header.php"; ?>
    <h1>create new product </h1>

    <?php if(!empty($errors)) : ?>

    <div class="aler alert-danger">
        <?php foreach($errors as $error): ?>
            <div>
                <?php echo $error ?>
            </div> 
         <?php endforeach; ?>   
    </div>
    <?php endif; ?>



   <?php require_once "../../views/products/form.php" ?>
  </body>
</html>