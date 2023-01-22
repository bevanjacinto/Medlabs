<?php
require "header.php";
?>


<main>
	<?php
	if (isset($_GET['error'])) {
		if ($_GET['error'] == "emptyfields") {
			echo '<p>Fill in all fields!!</p>';
		}
		elseif ($_GET['error'] == "invaliduidmail") {
			echo '<p>Invalid username and mail</p>';
		}
		elseif ($_GET['error'] == "invaliduid") {
			echo '<p>Invalid username!</p>';
		}
		elseif ($_GET['error'] == "invalidmail") {
			echo '<p>Invalid email</p>';
		}
		elseif ($_GET['error'] == "passwordcheck") {
			echo '<p>Your passwords do not match</p>';
		}
		elseif ($_GET['error'] == "usertaken") {
			echo '<p>Username is already taken</p>';
		}
		elseif ($_GET['error'] == "emailexist") {
			echo '<p>Email already exists</p>';
		}
	}
	?>
	
	<div class="container">
		<div class="card">
	<form action="includes/signup.inc.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username" name="uid">

  </div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="mail">
	<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Retype-Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pwd-repeat">
  </div>
  
  <button type="submit" name="signup-submit" class="btn btn-primary">Signup</button>
</form>
</div>
</div>
	<!--  
	<form action="includes/signup.inc.php" method="post">
				<input type="text" name="uid" placeholder="Username">
				<input type="text" name="mail" placeholder="email">
				<input type="password" name="pwd" placeholder="password">
				<input type="password" name="pwd-repeat" placeholder="retype password">
				<button type="submit" name="signup-submit">signup</button>
				
			</form>
			-->
</main>

<?php
require "footer.php";
?>
    