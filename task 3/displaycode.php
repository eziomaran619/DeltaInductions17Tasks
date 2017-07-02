<?php  
require "connect_to_database.php" ; 
?>

<?php
$sno = intval($_GET["snippetno"]) ;

$query  = "SELECT snippet FROM snippetlist WHERE snippetno=$sno" ;
$result = mysqli_fetch_assoc(mysqli_query($connection,$query)) ;

echo $result["snippet"] ;
?>