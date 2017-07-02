<?php  
require "connect_to_database.php" ; 
?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo "user : " . $_SESSION["user"] ; ?></title>
</head>
<body>
	<a href="defaultpage.php">log out</a>
	<br><br>
	<form method="post" action="processcodesave.php">
		<textarea name="code" rows="30" cols="100" 
		placeholder="code..."></textarea><br>
		<input type="submit" value="save code">
	</form>
</html>