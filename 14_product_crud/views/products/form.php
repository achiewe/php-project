
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