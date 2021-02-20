<?php
session_start();

// initializing variables
$username = "";
$email    = "";
$address  = "";
$city     = "";
$state    = "";
$zip      = "";
$cardnumber="";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'fashion-trac');

// REGISTER USER
if (isset($_POST['checkout_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $city = mysqli_real_escape_string($db, $_POST['city']);
  $state = mysqli_real_escape_string($db, $_POST['state']);
  $zip = mysqli_real_escape_string($db, $_POST['zip']);
  $cardnumber = mysqli_real_escape_string($db, $_POST['cardnumber']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($address)) { array_push($errors, "address is required"); }
  if (empty($city)) { array_push($errors, "city is required"); }
  if (empty($state)) { array_push($errors, "state is required"); }
  if (empty($zip)) { array_push($errors, "zip is required"); }
  if (empty($cardnumber)) { array_push($errors, "cardnumber is required"); }


  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {

  	$query = "INSERT INTO cart (username, email, address, city, state, zip, cardnumber) 
  			  VALUES('$username', '$email', '$address', '$city', '$state', '$zip', '$cardnumber')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: purchased.php');
  }else {
    array_push ($errors, "There was an error in transaction. Try again");
  }
}