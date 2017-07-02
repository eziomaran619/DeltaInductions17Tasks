<?php  
require "connect_to_database.php" ; 
?>

<?php
$snippet = $_POST["code"] ;
$un      = $_SESSION["user"] ;

if (!empty($snippet)) {
	$query = "INSERT INTO snippetlist (snippet,username) 
            VALUES (" . "'" . $snippet . "' , '" . $un . "'" . ")" ;
    mysqli_query($connection,$query) ;
    $result = mysqli_insert_id($connection) ;
    header("Location: displaycode.php?snippetno=$result") ;
}else{
	echo "code is empty" ;
}
            
?>