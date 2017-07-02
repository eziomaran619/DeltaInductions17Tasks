<?php  
require "connect_to_database.php" ; 
?>

<?php
$_SESSION["user"] = null ; 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Task3</title>
</head>
<body>
	<br>
	<h3>Login :</h3>
	<form method="post" action="loginuser.php">
		<input type="text" name="username" placeholder="username.."><br>
		<input type="text" name="password" placeholder="password.."><br>
		<input type="submit" value="login" ><br>
	</form>
	<br>
	<h3>Sign Up :</h3>
	<form method="post" action="signupuser.php">
		<input type="text" name="username" placeholder="username.."><br>
		<input type="text" name="password" placeholder="password.."><br>
		<input type="submit" value="sign up"><br><br>
	</form>
</body>
</html>