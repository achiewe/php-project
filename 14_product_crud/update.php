<?php 


$id = $_GET["id"] ?? null;
if(!$id){
    header("Location: index.php");
    exit;
}

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=products_crud", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 

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
        price = :price, create_date) WHERE id = :id");
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



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link href="./app.css" rel="stylesheet"/>
    <title> new product</title>
  </head>
  <body>
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

    <form method="post" enctype="multipart/form-data">
        <?php if($product["image"]): ?>
            <img src="<?php echo $product["image"] ?>"/>
            <?php endif; ?>
  <div class="form-group">
    <label >product Image</label><br>
    <input type="file" name="image">
  </div>
  <div class="form-group">
    <label >product title</label>
    <input type="text" name="title" value="<?php echo $title ?>" class="form-control">
  </div>
  <div class="form-group">
    <label >product decrtiption</label>
    <textarea class="form-control" name="description"><?php echo $description ?></textarea>
  </div>
  <div class="form-group">
    <label >product price</label>
    <input type="number" name="price" class="form-control" value="<?php echo $price ?>">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </body>
</html>