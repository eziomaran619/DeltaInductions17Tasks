<?php  
require "connect_to_database.php" ; 
?>

<?php
$un      = $_POST['username'] ;
$pass    = $_POST['password'] ;
$unexist = false ;

if ( !empty($un) && !empty($pass) ) {

	$query  = "SELECT username FROM userslist" ;
	$result = mysqli_query($connection,$query) ;

	if (mysqli_num_rows($result) > 0) {

		while ($row = mysqli_fetch_assoc($result)) {
			if ($un == $row["username"]) {
				$unexist = true;
				break;
			}
		}
	}

	if ($unexist) {
		$_SESSION["user"] = $un ;
		header("Location: userloggedin.php") ;
		exit() ;
	}else{
		echo "user doesn't exist" ;
	}

}else{
	echo "enter valid inputs" ;
}
?>