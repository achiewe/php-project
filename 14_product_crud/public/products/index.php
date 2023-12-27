<?php 


require_once "../../function.php";
require_once "../../database.php";

$keyword = $_GET['search']??null;

if($keyword){
  $statement = $pdo->prepare("SELECT * FROM products Where title like :keyword ORDER BY create_date DESC");
  $statement->bindValue(":keyword", "%$keyword%");

} else{
  $statement = $pdo->prepare("SELECT * FROM products ORDER BY create_date DESC");

}

$statement->execute();
$products = $statement->fetchAll(PDO::FETCH_ASSOC);

?>


 <?php require_once "../../views/partials/header.php"; ?>

    <h1>product crud</h1>
    <form action="" method="get">
  <div class="input-group mb-3">
    <input type="text" class="form-control" value="<?php echo $keyword ?>" name="search" placeholder="Search"/>
    <div class="input-group-append">
      <button class="btn btn-success" type="submit">Search</button>
    </div>

  </div>
    </form>
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