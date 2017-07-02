<?php  
require "connect_to_database.php" ; 
?>

<?php
if ($_SESSION["user"]) {
	header("Location: userloggedin.php") ;
	exit();
}else{
	header("Location: defaultpage.php") ;
	exit();
}

?>


