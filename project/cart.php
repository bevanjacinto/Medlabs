<?php
require 'header.php';


?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	
	<style type="text/css">
		.card{
			display: inline-block;
		}
		.product_item{
			display: inline-block;
			padding-left: 20px;
			padding-top: 20px;
		}
	</style>
</head>
<body>
<div class="conatiner"> 
<?php


$connect = mysqli_connect('localhost','root','','loginsystem');
$query = 'SELECT * FROM products ORDER by id ASC';
$result = mysqli_query($connect, $query);

if ($result) {
	if (mysqli_num_rows($result)>0) {
		while($product = mysqli_fetch_assoc($result))
		{
			?>
			<form method="post" action="cart.php?action=add&id= <?php echo $product['id']; ?>" class="product_item">
			<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product['name'];?></h5>
    <h6 class="card-subtitle mb-2 text-muted">$<?php echo $product['price'];?></h6>
    <p class="card-text">Stock available: <?php echo $product['stock'];?></p>
    <input type="submit" name="add_to_cart" class="btn btn-info" value="Buy"></input>
 
  </div>
</div>
</form>
				
				<!-- <form method="post" action="cart.php?action=add&id= <?php echo $product['id']; ?>" class="product_item">
					
					<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="<?php echo $product['image'];?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $product['name'];?></h5>
      </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">$<?php echo $product['price'];?></li>
    <li class="list-group-item">Stock available: <?php echo $product['stock'];?></li>
  </ul>
  <div class="card-body">
    <input type="submit" name="add_to_cart" class="btn btn-info" value="Buy"></input>
    
  </div>
</div>
				</form> -->

			
			<?php
		}
	}
}
?>

</body>
</html>


