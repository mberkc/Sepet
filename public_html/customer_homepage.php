<?php session_start(); ?>
<!DOCTYPE html>
<HTML>
 <HEAD>
 <meta charset="UTF-8">
  <TITLE>Homepage</TITLE>
 </HEAD>
 <BODY>
 
 <p align="right">
 
 <?php echo "Hello " . $_SESSION['username'] . ".<br>"; ?>
 <br> <a href="EditProfile.html">Edit Profile</a>
</p>
 <center>
 <h1>Sepet Yemeği</h1>
 <h2>Search</h2>
    <form action="query.php">
	  <label for="restaurantName">Search by Restaurant Name: </label>
	  <input type="text" name="tableName" id="tableName">
	  <input type="hidden" name="type" value="search_rest_name">
	  <input type="submit" value="Search">	   	   	  
	</form>
	<br>
	<form action="query.php">
	  <label for="cusineName">Search by Cusine: </label>
	  <input type="text" name="tableName" id="tableName">
	  <input type="hidden" name="type" value="search_cusine_name">
	  <input type="submit" value="Search">	   	   	  
	</form>
</center>
 </BODY> 
 </HTML>