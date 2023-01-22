<?php 
	session_start();
	$name = "";
	$stock = "";
	$price ="";
	$id = 0;
	$edit_state = false;
	//connect to database
	$db = mysqli_connect('localhost', 'root', '', 'loginsystem');
	if (isset($_POST['save'])){
		$name = $_POST['name'];
		$stock = $_POST['stock'];
		$price = $_POST['price'];

		$query = "INSERT INTO products (name, stock,price) VALUES ('$name', '$stock', '$price')";
		mysqli_query($db, $query);
		$_SESSION['msg'] = "Stock saved";
		header('location: form.php');
	} 
	
	if (isset($_POST['update'])){
		$name = mysqli_real_escape_string($_POST['name']);
		$stock = mysqli_real_escape_string($_POST['stock']);
		$stock = mysqli_real_escape_string($_POST['price']);	
		$id = mysqli_real_escape_string($_POST['id']);

		mysqli_query($db, "UPDATE products SET 'name'='$name', 'stock'='$stock', 'price'='$price' WHERE id=$id");
		$_SESSION['msg'] = "Stock updated";
		header('location: form.php');



	}

	if(isset($_GET['del'])) {
		$id = $_GET['del'];
		mysqli_query($db, "DELETE FROM products WHERE id=$id ");
		$_SESSION['msg'] = "stock deleted";
		header('location: form.php');
	}

	$results = mysqli_query($db, "SELECT * FROM products");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];

  	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO images (image) VALUES ('$image')";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
  $result = mysqli_query($db, "SELECT * FROM images");

 ?>