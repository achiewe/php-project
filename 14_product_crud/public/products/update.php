<?php 

require_once "../../function.php";
require_once "../../database.php";

$id = $_GET["id"] ?? null;
if(!$id){
    header("Location: index.php");
    exit;
}


 

$statement = $pdo->prepare("SELECT * FROM products WHERE id = :id");
$statement->bindValue(":id", $id);
$statement->execute();
$product = $statement->fetch(PDO::FETCH_ASSOC);

$errors = [];

$title = $product["title"];
$description = $product["description"];
$price = $product["price"];

if($_SERVER['REQUEST_METHOD'] === "POST"){

    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];


    $image = $_FILES['image'] ?? null;

    $imagePath = '';

    if(!is_dir('images')) {
        mkdir('images');
    }

    if($image){
        if($product["image"]){
            unlink($product["image"]);
        }
        $imagePath='images/'.randomString(8).'/'.$image['name'];
        mkdir(dirname($imagePath));
        move_uploaded_file($image['tmp_name'], 'images/'.$image['name']);
    }

    if(!$title){
        $errors[] = 'Product title is required';
    }

    if(!$price){
        $errors[] = 'Product price is required';
    }

    if(empty($errors)){
        $statement = $pdo->prepare("UPDATE products SET title = :title, 
        image = :image, 
        description = :description, 
        price = :price WHERE id = :id");
        $statement->bindValue(':title', $title);
        $statement->bindValue(':image', $imagePath);
        $statement->bindValue(':description', $description);
        $statement->bindValue(':price', $price);
        $statement->bindValue(':id', $id);
  
        
        $statement->execute();
        header('Location: index.php');
        }
    }


    // echo "<pre>";
    // var_dump($errors);
    // echo "</pre>";

  







echo "<pre>";
var_dump($product);
echo "<pre>";



?>



<?php require_once "../../views/partials/header.php"; ?>

  <p>
  <a href="index.php" class="btn btn-secondary"> Back to products</a>
  </p>
    <h1>update product: <?php echo $product["title"] ?> </h1>

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