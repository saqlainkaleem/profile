<?php
$dbhost = "localhost";
$username = "root";
$password = "";
$db="adil";
 $con=mysqli_connect($dbhost,$username,$password,$db);
if($con)
{
	// echo "Connection OK";
}
else{
	die("Connection Failed because".mysqli_connect_error());
}

?>