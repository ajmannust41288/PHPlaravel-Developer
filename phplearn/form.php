<?php

//---------------------------------------------
// WARNING: this doesn't include sanitization
// and validation
//---------------------------------------------
if (isset($_POST['name'], $_POST['password'],$_POST['email'])) {
	$name = $_POST['name'];
	$password=$_POST['password'];
	$email = $_POST['email'];

	// show the $name and $email
	echo "Thanks $name for your subscription.<br>";
	echo "yours password is  $password for database .<br>";
	echo "Please confirm it in your inbox of the email $email.";
} else {
	echo 'You need to provide your name, password and email address.';
}
