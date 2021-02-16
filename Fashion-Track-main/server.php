<?php

//intializing variables
$username = "";
$email    = "";
$message  = "";
$errors = array(); 

// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','contact');


if(isset($_POST['reg_user']))
    {
// get the post records
$username = mysqli_real_escape_string($con, $_POST['username']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$message = mysqli_real_escape_string($con, $_POST['message']);
    }

    
  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($message)) { array_push($errors, "message is required"); }


  if (count($errors) == 0) {

// database insert SQL code
$sql = "INSERT INTO `contact us` ( `username`, `email`, `message`) VALUES ( '$username', '$email', '$message')";

// insert in database 
$rs = mysqli_query($con, $sql);

//$_SESSION['username'] = $username;
 // 	$_SESSION['success'] = "Your message is inserted";
  	header('location: index.php');

  }
?>