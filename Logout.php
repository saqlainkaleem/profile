<!DOCTYPE html>
<html>
<head>
	<title>LOGOUT</title>
	<style type="text/css">
		button{
			width: 100px;
			height:50px;
			background-color: black;
			color: white;
			border:2px solid red;  
			/*visibility:hidden;  */
		}
	</style>
</head>
<body>
<center>	Do You Want to logout<br><br><br>
	<button id="btn"> <a href="index.php"> YES </button></a>
</center>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
	 <?php $flag='false';?>
	$('#btn').click(function(){		// alert('hello');
  $.ajax({
    url:'index1.php',
    type:'POSTs',
    success:function(data){
		 <?php $flag='true';?>
		   $('#btn').css('visibility','hidden');             
    }
  });
})

</script>
</html>
<?php
if($flag==true)
{
	include('index.php');
} 
?>