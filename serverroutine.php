<?php
session_start();

// initializing variables
$day = "";
$fperiod   = "";
$speriod   = "";
$tperiod   = "";
 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'cr');

// REGISTER USER
if (isset($_POST['classroutine'])) {
  // receive all input values from the form
  $day = mysqli_real_escape_string($db, $_POST['day']);
  $fperiod = mysqli_real_escape_string($db, $_POST['fperiod']);
  $speriod = mysqli_real_escape_string($db, $_POST['speriod']);
  $tperiod = mysqli_real_escape_string($db, $_POST['tperiod']);
  
 

  	$query = "INSERT INTO classroutine (Day, First_period, Second_period, Third_period ) 
  			  VALUES('$day', '$fperiod', '$speriod', '$tperiod')";
    mysqli_query($db, $query);
    
  	header('location: index.php');
  }

?>