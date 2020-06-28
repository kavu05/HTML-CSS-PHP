<?php
 session_start();
 require 'dbconfig/config.php';

?>
<!DOCTYPE HTML>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" href="css/style.css" type="text/css">
 </head>
 <div class="container">
 <div class="adminheader">
 <b>Admin Login Page</b>
 </div>
 <div class="header">
	    <div class="alogo">
        <a href="index1.php"><img src="images/logo1.png" alt=""></a>
  </div>
  
 
  <form action="adminlogin.php" method="post">
   <div class="adminlogin">
       <label for="fname"><b>User Name</b><br/></label>
       <input name="username" type="text" id="fname" required>

       <label for="psw"><br><b>Password</b><br/></label>
       <input  name="password" type="password"  id="psw" required><br/>
	
	   <button name="adminlogin" type="submit" class="adminloginbtn">Login</button><br/>
	</div>
   </form> 
   
 <?php
          if(isset($_POST['adminlogin']))
        {
	      $username=$_POST['username'];
	      $password=$_POST['password'];
          $query="select * from admin WHERE username='$username' AND  password='$password'";
		  $query_run =mysqli_query($con,$query);
		  if(mysqli_num_rows($query_run)==1){
				  echo"login successful";
				  $_SESSION['username']=$username;
				  header('location:admin.php');
			  }else{
				   echo '<script type="text/javascript">alert("Invalid Admin Credentials")</script>';
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
</div> 
</html> 