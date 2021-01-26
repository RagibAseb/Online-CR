<?php
session_start();

// initializing variables
$notice = "";



// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cr');


if (isset($_POST['add'])) {
  // receive all input values from the form
  $notice = $_REQUEST["notice"];
  
 
  	$query = "INSERT INTO noticee (notice) 
  			  VALUES('$notice')";
    mysqli_query($db, $query);
    
  	header('location: index.php');
  }

?>