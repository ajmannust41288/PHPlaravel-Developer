<?php

//-----------------------------------------------------
// WARNING: this doesn't include sanitization
// and validation
//-----------------------------------------------------
$fnameerr = $mnameerr=$lnameerr=$ageerr=$cityerr=$emailerr =$phoneerr=$eduerr= $gendererr =
 $commenterr = $websiteerr = "";
// define variables and set to empty values
$fname = $mname=$lname=$age=$city=$email =$phone=$edu= $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["fname"]))
	{
		$fnameerr="First name is required";
	}
	else{
  $fname = test_input($_POST["fname"]);}
  if(empty($_POST["mname"]))
	{
		$mnameerr="Middle name is required";
	}
	else{
  $mname = test_input($_POST["mname"]);}
  if(empty($_POST["lname"]))
	{
		$lnameerr="last name is required";
	}
	else{
  $lname = test_input($_POST["lname"]);}
  if(empty($_POST["age"]))
	{
		$ageerr="Your age is required";
	}
	else{
  $age = test_input($_POST["age"]);}
  if(empty($_POST["city"]))
	{
		$cityerr="city name is required";
	}
	else{
  $city = test_input($_POST["city"]);}
  if(empty($_POST["email"]))
	{
		$emailerr="Email is required";
	}
	else{
  $email = test_input($_POST["email"]);}
  if(empty($_POST["phone"]))
	{
		$phoneerr="Phone number is required";
	}
	else{
  $phone = test_input($_POST["phone"]);}
  if(empty($_POST["edu"]))
	{
		$eduerr="Eduacation field is required";
	}
	else{
  $edu = test_input($_POST["edu"]);}
  if(empty($_POST["website"]))
	{
		$websiteerr="website is required";
	}
	else{
  $website = test_input($_POST["website"]);}
  if(empty($_POST["comment"]))
	{
		$commenterr="comment are optional ";
	}
	else{
  $comment = test_input($_POST["comment"]);}
  if(empty($_POST["gender"]))
	{
		$gendererr="select gender is  required";
	}
	else{
  $gender = test_input($_POST["gender"]);}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
echo "<h2><mark>Your Data </mark>:</h2>";
echo "Your first name is  $fname";
echo "<br>";
echo "<mark>Your Middle name is  $mname </mark>";
echo "<br>";
echo "Your last  name is  $lname ";
echo "<br>";
echo "<mark >Your full name is  $fname $mname $lname </mark>";
echo "<br>";
echo "Your age is  $age";
echo "<br>";
echo " Your city name is $city ";
echo "<br>";
echo "Your Email is   $email ";
echo "<br>";
echo "Your Phone number  is  $phone ";
echo "<br>";
echo "Your Education  is  $edu ";
echo "<br>";
echo "Your Website is  $website  ";
echo "<br>";
echo "Your comments  are  $comment  ";
echo "<br>";
echo "Specified gender is  $gender ";
?>