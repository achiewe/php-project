<?php 

$pdo = new PDO("mysql:host=localhost;port=3306;dbname=products_crud", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 

$statement = $pdo->prepare("SELECT * FROM products ORDER BY create_date DESC");
$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

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
    <title>product crud</title>
  </head>
  <body>
    <h1>product crud</h1>

    <p>  
    <a href="create.php" type="button" class="btn btn-sm btn-success">Add Product</a>
    </p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Title</th>
      <th scope="col">Price</th>
      <th scope="col">Create date</th>
      <th scope="col">Actions</th>
    </tr>
  </thead>
  <tbody>

  <?php foreach ($products as $i => $product) { ?>
    <tr>
      <th scope="row"><?php echo $i + 1  ?></th>
      <td>
        <?php if($product['image']): ?>
        <img src="<?php echo $product['image'] ?>" alt="<?php echo $product['title'] ?>" />
        <?php endif; ?>
      </td>
      <td><?php echo $product["title"] ?> </td>
      <td> <?php echo $product["price"] ?> </td>
      <td> <?php echo $product["create_date"] ?> </td>
      <td> 
      <a href="update.php?id=<?php echo $product["id"] ?>" class="btn btn-sm btn-outline-primary">Edit</a>
      <form method="post" action="delete.php" style="display: inline-block;">
        <input type="hidden" name="id" value="<?php echo $product["id"]?>"/>
      <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button> 
      </form>    
    </td>
    </tr>
  <?php } ?>
  </tbody>
</table>

  </body>
</html>