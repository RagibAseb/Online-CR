<?php
session_start();

// initializing variables
$cname = "";
$topic   = "";
$deadline   = "";


// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cr');

// REGISTER USER
if (isset($_POST['assignment'])) {
  // receive all input values from the form
  $cname = mysqli_real_escape_string($db, $_POST['cname']);
  $topic = mysqli_real_escape_string($db, $_POST['topic']);
  $deadline = mysqli_real_escape_string($db, $_POST['deadline']);
  
 
  	$query = "INSERT INTO assignment (Course_name, Topic, Submission_deadline) 
  			  VALUES('$cname', '$topic', '$deadline')";
    mysqli_query($db, $query);
    
  	header('location: index.php');
  }

?>