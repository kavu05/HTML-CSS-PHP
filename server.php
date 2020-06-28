<?php 
	session_start();
	
	// initialize variables
	$firstname = "";
	$lastname ="";
	$email = "";
	$address = "";
	$id = 0;
	$update=false;
	
	//connect to database
    $db = mysqli_connect('localhost', 'root', '', 'logindb');
	
	//if save button is clicked
	if (isset($_GET['save'])){
		
		$firstname = $_GET['firstname'];
		$lastname = $_GET['lastname'];
		$email = $_GET['email'];
		$address = $_GET['address'];
        mysqli_query($db,	"INSERT INTO users (firstname,lastname,email,address) VALUES ('$firstname','$lastname','$email','$address')"); 
		$_SESSION['message'] = "User added Successfully !"; 
		header('location: admin.php');
		exit();
		echo $_SESSION['message'];
	}
	//if update button is clicked
	if (isset($_GET['update'])) {
	$id = $_GET['id'];
	$firstname = $_GET['firstname'];
	$lastname = $_GET['lastname'];
	$email = $_GET['email'];
	$address = $_GET['address'];
    mysqli_query($db, "UPDATE users SET firstname='$firstname', lastname='$lastname', email= '$email',address='$address' WHERE id=$id");
	$_SESSION['message'] = "User Updated Successfully !"; 
	header('location: admin.php');
	exit();
	echo $_SESSION['message'];
   }
   //if delete button is clicked
   if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM users WHERE id=$id");
	$_SESSION['message'] = "User deleted Successfully !"; 
	header('location: admin.php');
	exit();
	echo $_SESSION['message'];
   }