<?php
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
  <a href="deals.html">Deals</a>
  <a href="contact.html">Contact Us</a>
</div>


<form action="register.php" method="post">
    <div class="register">
    
    <h3>Thanks for registering with us. Please fill in this form to create an account.</h3>
    <hr>
	
	<label for="fname"><b>First Name</b><br/></label>
    <input name="firstname" type="text" placeholder="Enter your First name" id="fname" size=50 required  >
	

    <label for="lName"><br><b>Last Name</b><br/></label>
    <input name="lastname" type="text" placeholder="Enter your Last name" id="lName" size=50 required >
	
	
	<label for="email"><br><b>Email</b><br/></label>
    <input name="email" type="email" placeholder="Enter your Email address" id="email" size=50 required  >

    <label for="psw"><br><b>Password</b><br/></label>
    <input name="password" type="password" placeholder="Enter your Password" id="psw" size=25  required>

    <label for="psw2"><br><b>Repeat Password</b><br/></label>
    <input name="repeatpassword" type="password" placeholder="Repeat your Password" id="psw2" size=25  required >
 
	<label for="pnumber"><br><b>Phone Number</b><br/></label>
    <input name="phonenumber" type="text"  placeholder="10 digits" id="pnumber" pattern="[789][0-9]{9}"size=11 required> 
	
	<label  for="address"><br><b>Address</b><br/></label>
    <input name="address" type="text" placeholder="Flat no,Street name" id="address" size=50  required >
	
	<label  for="postcode"><br><b>Postcode</b><br/></label>
    <input name="postcode" type="text" id="postcode" size=10  pattern="[A-Za-z]{1,2}[0-9Rr][0-9A-Za-z]? [0-9][ABD-HJLNP-UW-Zabd-hjlnp-uw-z]{2}" 
  placeholder="(2 groups)" required>
	<hr>
    By creating an account you agree to our <a href="#">Terms & Privacy.</a><br/>

    <button  name= "regbtn" type="submit" class="registerbtn">Register</button>
  </div>
 </form>
 <?php
		if(isset($_POST['regbtn']))
		{
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$email=$_POST['email'];
			$password=$_POST['password'];
			$repeatpassword=$_POST['repeatpassword'];
			$phonenumber=$_POST['phonenumber'];
			$address=$_POST['address'];
			$postcode=$_POST['postcode'];
			
			if($password=$repeatpassword)
			{
				$query="select * from users WHERE email='$email'";
				$query_run= mysqli_query($con,$query);
				if(mysqli_num_rows($query_run)>0)//if there is already user with the same email address
				{
					
					echo '<script type="text/javascript"> alert("Email address already exists....")</script>';
				}
				else
				{
					$query= "insert into users values('','$firstname','$lastname','$username','$email','$password',
					'$repeatpassword','$phonenumber','$address','$postcode')";
					$query_run=mysqli_query($con,$query);
					
					if($query_run)
					{
						echo '<script type="text/javascript"> alert("User registered...Go to Login page to Login")</script>';
						header('location:login.php');
					}
					else
					{
						echo '<script type="text/javascript"> alert("Error!!")</script>';
					}
				}	
			}	
			else{
				echo '<script type="text/javascript"> alert("Password and Repeat password does not match")</script>';
				
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


