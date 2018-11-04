<?php include('server.php');

if(isset($_GET['edit'])){
	$id = $_GET['edit'];
	$edit_state = true;
	$rec = mysqli_query($db, "SELECT * FROM products WHERE id=$id");
	$record = mysqli_fetch_array($rec);
	$name = $record['name'];
	$address = $record['stock'];
	$id = $record['id'];
  $price=$record['price'];
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>how</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<style type="text/css">
   #content{
   	width: 50%;
   	margin: 20px auto;
   	border: 1px solid #cbcbcb;
   }
   form{
   	width: 50%;
   	margin: 20px auto;
   }
   form div{
   	margin-top: 5px;
   }
   #img_div{
   	width: 80%;
   	padding: 5px;
   	margin: 15px auto;
   	border: 1px solid #cbcbcb;
   }
   #img_div:after{
   	content: "";
   	display: block;
   	clear: both;
   }

   .nathan{
   	width: 100%;
   	height: 100%;
   	margin-bottom: 25px;
   }

   img{
   	float: left;
   	margin: 5px;
   	width: 300px;
   	height: 140px;
   }
</style>

</head>
<body>

<img src="9.jpg" class="nathan">

<?php if (isset($_SESSION['msg'])): ?>
	<div class="msg">
		<?php 
		echo $_SESSION['msg'];
		unset($_SESSION['msg']);
		?>

	</div>

<?php endif ?>
<?php $results= mysqli_query($db, "SELECT * FROM products");?>

		<table>
			<thead>
				<tr>
					<th>Name</th>
					<th>stock</th>
					<th>price</th>
					<th colspan="2">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php while ($row = mysqli_fetch_array($results)) { ?>
				<tr>
					<td><?php echo $row['name'];?></td>
					<td><?php echo $row['stock']; ?></td>
          <td><?php echo $row['price'];?></td>
					
  	<input type="hidden" name="size" value="1000000">
  	<!-- <div>
  	  <input type="file" name="image">
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div> -->
  </form><button type="submit" name="upload"></button></td>
					<td><a class ="edit_btn" href="form.php?edit=<?php echo $row['id']; ?>">Edit</a></td>
					<td><a class ="del_btn" href="server.php?del=<?php echo $row['id']; ?>">Delete</a></td>
					<!-- echo "<div id='img_div'>"; -->
      	<!-- echo "<img src='images/".$row['image']."' >";
      echo "</div>"; -->
				</tr>
			<?php } ?>
			</tbody>
		</table>


		<form method="post" action="server.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="input-group">
				<label>Name</label>
				<input type="text" name="name" value="<?php echo $name; ?>">
			</div>
			<div class="input-group">
				<label>Stock</label>
				<input type="text" name="stock" value="<?php echo $stock; ?>">
			</div>
      <div class="input-group">
        <label>Price</label>
        <input type="text" name="price" value="<?php echo $price; ?>">
      </div>
			<div class="input-group">
				<?php if ($edit_state == false): ?>
				<button type="submit" name="save" class="btn">Save</button>
				<?php else: ?>
				<button type="submit" name="update" class="btn">Update</button>
			<?php endif ?>
			</div>
		</form>

		<!-- <div id="content">
 		<?php
    while ($row = mysqli_fetch_array($results)) {
      echo "<div id='img_div'>";
      	echo "<img src='images/".$row['image']."' >";
      echo "</div>";
    }
  ?>
  <form method="POST" action="form.php" enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div> -->
<form action="index.php" method="post"><button type="submit" class="btn btn-light" style=" align-content: center;">Home</button></form>
</body>
</html>