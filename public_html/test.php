<?php
session_start();
// Create connection
$con=mysqli_connect("localhost","Group_23","kpwim","Group_23_db");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  
  $username = "";

// display result in an HTML table

if(isset($_POST['login_customer'])){ //CUSTOMER LOGIN
	$username = $_POST['username'];
	$result = mysqli_query($con,"SELECT username FROM Customer WHERE `username`='$username'" ); 
	if(mysqli_num_rows($result)==0){ //Username yoksa
		echo "There isn't an account with the username $username ";		
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		echo $row["username"];	
	}else{  //Username varsa
		$result = mysqli_query($con,"SELECT password FROM User WHERE `username`='$username'");
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$password = $_POST['password'];
		$real_password = $row["password"];
		$_SESSION['username'] = $username;	
		if($password == $real_password){		
			header('Location: customer_homepage.php'); //öncesine pause koymak lazım				
		}else{
			echo "Wrong Password";
		}
			
	}	
}elseif(isset($_POST['login_owner'])){ //OWNER LOGIN
	$username = $_POST['username'];
	$result = mysqli_query($con,"SELECT username FROM Owner WHERE `username`='$username'" ); 
	if(mysqli_num_rows($result)==0){ //Username yoksa
		echo "There isn't an account with the username $username ";		
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		echo $row["username"];	
	}else{  //Username varsa
		$result = mysqli_query($con,"SELECT password FROM User WHERE `username`='$username'");
		$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
		$password = $_POST['password'];
		$real_password = $row["password"];
		$_SESSION['username'] = $username;
		if($password == $real_password){	
			header('Location: owner_homepage.php'); //öncesine pause koymak lazım		
		}else{
			echo "Wrong Password";
		}	
}}
?>	

