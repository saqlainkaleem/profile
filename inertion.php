<?php
include('connect.php');
$USERNAME=$_POST['username'];
$EMAIL=$_POST['email'];
$PASSWORD=$_POST['password'];
$PASSWORD2=$_POST['password2'];
if($USERNAME==""|| $EMAIL==""||$PASSWORD==""||$PASSWORD2=="")
{
	echo "all field is needed";
	include('Register.php');
}
else{
   $sql = "INSERT INTO STUDENT(USERNAME,EMAIL,PASSWORD,RETYPE_PASSWORD) VALUES ('$USERNAME','$EMAIL','$PASSWORD','$PASSWORD2')";

   if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
    include('index.php');
   } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
} 
?>