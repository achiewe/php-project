<?php 
require_once "function.php";

require_once "database.php";
 
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

if($_SERVER['REQUEST_METHOD'] === "POST"){

    $title = $_POST["title"];
    $description = $_POST["description"];
    $price = $_POST["price"];


    $image = $_FILES['image'] ?? null;

    $imagePath = '';

    if(!is_dir('images')) {
        mkdir('images');
    }

    if($image && $image["tmp_name"]){
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



<?php require_once "views/partials/header.php"; ?>
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

    <form method="post" enctype="multipart/form-data">
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