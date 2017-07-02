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

	if (!$unexist) {
		$query = "INSERT INTO userslist VALUES (" . "'" . $un . "'" . "," . "'" . $pass . "'" . ")" ;
		mysqli_query($connection,$query) ;
		echo "sign up successful, go back and login" ;
	}else{
		echo "user name already taken" ;
	}

}else{
	echo "enter valid inputs" ;
}
?>