<?php
session_start();

// initializing variables
$cname = "";
$topic   = "";
$date   = "";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cr');


if (isset($_POST['classtest'])) {
  // receive all input values from the form
  $cname = mysqli_real_escape_string($db, $_POST['cname']);
  $topic = mysqli_real_escape_string($db, $_POST['topic']);
  $date = mysqli_real_escape_string($db, $_POST['date']);
  
 
  	$query = "INSERT INTO classtest (Course_name, Topic, datee) 
  			  VALUES('$cname', '$topic', '$date')";
    mysqli_query($db, $query);
    
  	header('location: index.php');
  }

?>