<?php
     session_start();
	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet"  href="css/style.css" type="text/css">
  <title>HeavenDrop</title>
</head>


<div class="container">
  <div class="header">
      <div class="logo">
         <img src="images/logo1.png" alt="">
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
<div class="info">
	<br>
    <h2><?php echo "Welcome ".$_SESSION["email"]; ?><br></h2>
        You can view your recent account activity and update your account information by selecting view or edit information.
   <hr>
   <h3>Contact information</h3>
   <input type="submit" class="logout_btn" value="Edit"><br>
   <hr>
   <h3>Manage Address</h3>
   <input type="submit" class="logout_btn" value="Edit"><br>
   <hr>
   <a href="index1.php"><input type="submit" class="logout_btn" value="Log Out"></a><br>
 </div>
 
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