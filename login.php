<?php
 session_start();
 require 'dbconfig/config.php';

?>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet"  href="css/style.css" type="text/css">
  <title>HeavenDrop</title>
</head>


<div class="container">
  <div class="header">
      <div class="logo">
         <a href="index1.php"><img src="images/logo1.png" alt=""></a>
      </div>
   <div class ="searchbtn">
	 <input type="text" placeholder="Search for your drinks..">
   </div>
    

 </div>

<div class="navbar">
  <a href="#">Whisky</a>
  <a href="#">Wine</a>
  <a href="#">Beer & Cider</a>
  <a href="#">Soft Drinks</a>
  <a href="#">Gift Ideas</a>
  <a href="deals.php">Deals</a>
  <a href="contact.php">Contact Us</a>
</div>

<form action="login.php" method="post">
  <div class="Login">
    <h3> Already have an account?</h3>
	<hr>
    
	<label for="fname"><b>Email Address</b><br/></label>
    <input name="email" type="text" placeholder="Enter your email" id="fname" required>

    <label for="psw"><br><b>Password</b><br/></label>
    <input  name="password" type="password" placeholder="Enter your Password" id="psw" required><br/>
	
	
	<button name="login" type="submit" class="loginbtn">Login</button><br/>
	<div><a href="register.php?register=1">Create a new account?</a></div>	
	
    </div>
 </form>
 <?php
          if(isset($_POST['login']))
        {
	      $email=$_POST['email'];
	      $password=$_POST['password'];
          $query="select * from users WHERE email='$email' AND  password='$password'";
	      $query_run =mysqli_query($con,$query);
	          if(mysqli_num_rows($query_run)>0)
	          { 
		          $_SESSION['email']=$email;
                  header('location:welcomeuser.php');		 
	          }
	          else
	          {
		        echo '<script type="text/javascript">alert("Invalid Credentials.Please create an account before login")</script>';
				}
         }
 ?>
 
<footer>
<b>Site under construction</b><br/>
Heaven Drop Ltd.<br/>
   30 Commercial Street<br/>
   Edinburgh, Eh6 7pz<br/>
   07976789656<br/>
   heavendrop@gmail.com<br/><br/>
</footer>
</div>
</html>		