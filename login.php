<?php 

  if (isset($_POST['submit'])){
    $username = $_POST['user'];
    $password = $_POST['password'];
	$db = mysqli_connect("localhost","root","","CS1520");
	
	$result1 = mysqli_query("SELECT * FROM playerlist WHERE Username = '$username'");
	$result2 = mysqli_query("SELECT * FROM playerlist WHERE Username = '$username' AND password = '$password'");
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login</title>
  </head>
  <body>
    <div id="login">
	  <form action="login.php">
	    <label>Username: </label>
		<input type="text" name="user" id="user">
		<br>
		<label>Password: </label>
		<input type="text" name="password" id="password">
		<br>
		<input type="submit" id="button" value="Log In">
	  </form>
	</div>
  </body>
</html>