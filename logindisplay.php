<?php
include('connect.php');
$USERNAME_LOGIN=$_POST['Username'];
$PASSWORD_LOGIN=$_POST['password'];


if($USERNAME_LOGIN==""||$PASSWORD_LOGIN=="")
{
	echo "all field is needed";
	include('login.php');
}
else{

   $sql = "SELECT * FROM student";
   $data=mysqli_query($con, $sql);
  $total= mysqli_num_rows($data);
  $flag=false;
  if($total!=0)
  {
	   while($result=mysqli_fetch_assoc($data)){
	    $username=$result['USERNAME'];
	     $password=$result['PASSWORD'];
	    if($USERNAME_LOGIN==$username&&$PASSWORD_LOGIN==$password)
	     {
	     	$flag=true;
	     	break;
	     }
	     $total--;

	  }
	 if($flag==true)
	 {
        include('index1.php');   
	 } 

    else
     { include('abc.php');	
  	  include('login.php');
}
  }
  else
  {
  	echo "No records Found";
  }
  
} 
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
	$(document).ready(function () {
		$('.saq').append('<h3>Hello Mr. '+spge+' Welcome to Web Portal</h3>');
	})
// then echo it into the js/html stream
// and assign to a js variable
spge = '<?php echo $USERNAME_LOGIN;?>';
</script>