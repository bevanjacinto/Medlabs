<?php
	session_start();
?>	
<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<meta charset="utf-8">
	<meta name="description" content="This is an example of meta description">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title></title>
	<style type="text/css">
		
		.navbar{
			color: rgb(1, 0, 0);
			padding-top: 5px;
			padding-bottom: 5px;
		}

		#res li{
			display: inline;
			float:left;
			margin:20px;
		}
		.bois{
			display: inline;
			margin: 20px;
			float: right;

		}
		.container{
			position: center;
			margin-top: 10px;
			width: 30rem;

		}
		.card{

			padding: 50px 10px 10px 10px;
		}
	</style>
</head>
<body>

<header>

	<nav class="navbar navbar-expand-lg " >
  </a>
 
		<ul id=res>
			<li><form action="index.php" method="post"><button type="submit" class="btn btn-outline-danger" href="index.php">Home</button></form></li>
		
			
			<?php
			/*$servername="localhost";
$dBUsername= "root";
$dBPassword= "";
$dBName = "loginsystem";*/

/*$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
$query ='SELECT idUsers from users WHERE uidUsers="beva"';
$result = mysqli_query($conn,$query);
$row =  mysqli_fetch_array($result);
$rec=$row['idUsers'];
echo '<li>' . $rec . '</li>';*/
			if (isset($_SESSION['userId'])) {
		echo '<li><form action="includes/logout.inc.php" method="post" >
				
				<button type="submit" class="btn btn-outline-danger" name="logout-submit">Logout</button>
				
			</form>

		</li>
		<li><form action="http://localhost/project/cart.php" method="post"><button type="submit" class="btn btn-outline-danger">Products</button></form></li>';
		if ($_SESSION['userId'] == 3) {
			
			echo '<form action="http://localhost/project/form.php" style="display: inline"><li><button type="submit"  class="btn btn-outline-danger">Modfiy</button></li>';
		}
		}
		else {
		echo '<li><form action="includes/login.inc.php" method="post" style="display: inline">
			<input type="text" name="mailuid" placeholder=" Username...." style="margin-left: 10px">
			<input type="password" name="pwd" placeholder=" password..." style="margin-left: 10px">
			<button type="submit" name="login-submit" class="btn btn-outline-danger "style="margin-left: 10px" >Login</button>
			</form>
				<li><form action="signup.php" method="post"><button type="submit" class="btn btn-outline-danger">Signup</button>
				</form></li>
			
			</li>'
			;
		
		}
		
			?>
			
			
			
		</ul>
	
	</nav>
		 
			
			
			
	
</header>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>