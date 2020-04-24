<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>َLogin Page</title>
    
    <link rel="stylesheet" href="style.css">
    <style>
      #p3
      {
        text-decoration:none;
        color: lightgreen; 
      }
      #p3:hover
      {
        color: black;
        background-color: white;
        border-radius: 5px;
      }
    </style>
  </head>
  <body>

<form class="box" action="logindisplay.php" method="post">
  <h1>Login</h1>
  <input type="text" name="Username" placeholder="Username" required>
  <input type="password" name="password" placeholder="Password" required>
  <input type="submit" name="" value="Login">
<p style="color: white; font-family: chiller;"> By Mohd Kaleem Saqlaini</p>
<p style="color: white;">Not  Registered &nbsp; &nbsp; <a href="Register.php" id="p3">Click Here</a></p>
</form>


  </body>
</html>
