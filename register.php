<html>
<head>
<title> Signup_saqlainkaleem</title>   
    <link rel="stylesheet" type="text/css" href="signupstyle.css">
    <style>
      #pw
      {
        color:blue;
        text-decoration: none; 
      }
      #pw:hover
      {
        color: black;
        border-radius: 5px;
        background-color: white;
      }
    </style>
</head>
<body>
<form action="inertion.php" method="POST">
    <div id="login-box">
      <div class="left-box">
        <h1> Sign Up</h1>
          
          <input type="text" name="username" placeholder="Username"/>
          <input type="text" name="email" placeholder="Email"/>
          <input type="password" name="password" placeholder="Password"/>
        
          <input type="password" name="password2" placeholder="Retype password"/>
        
          <input type="submit" name="signup-button" value="Sign Up"/><br>
          <a href="login.php" id="pw">Already Registered Login here </a>
        </div>
        <div class="right-box">
          <span class="signinwith">Follow Us On<br/>Social Network     </span>
        
        <a href="https://www.Facebook.com/saqlainikaleem" class="fa fa-facebook"><button class="social facebook"> Facebook</button></a>    
        <a href="https://www.twitter.com/saqlainkaleem" class="fa fa-twitter"><button class="social twitter">Twitter</button></a> 
        <a href="https://www.Instagram.com/saqlainkaleem" class="fa fa-instagram"><button class="social google">Instagram</button> </a>
        </div>
        <div class="or">AND<div>
    </div>
</form>    
</body>    
</html>