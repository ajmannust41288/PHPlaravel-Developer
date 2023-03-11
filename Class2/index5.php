<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<?php
// define variables and set to empty values
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
  $fname = test_input($_POST["fname"]);
// check if name only contains letters and whitespace
if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
  $fnameerr = "Only letters and white space allowed";
}
}
  if(empty($_POST["mname"]))
	{
		$mnameerr="Middle name is required";
	}
	else{
  $mname = test_input($_POST["mname"]);
if(!preg_match("/^[a-zA-Z-']*$/",$mname)){
  $mnameerr="Only letter and white spaces are required";
}
}
  if(empty($_POST["lname"]))
	{
		$lnameerr="last name is required";
	}
	else{
  $lname = test_input($_POST["lname"]);
  if(!preg_match("/^[a-zA-Z-']*$/",$lname)){
    $lnameerr="Only letter and white spaces are required";
  }
}
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
  $email = test_input($_POST["email"]);
// check if e-mail address is well-formed
if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
  $emailerr = "Invalid email format";
}
}
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
  $website = test_input($_POST["website"]);
 // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
 if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;
 ]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
  $websiteerr = "Invalid URL";
}
}
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

<h2><mark>Registraion for Employees by ASE Ajman khan</mark></h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div>
fname:<input type="text" name="fname" value="<?php echo $fname; ?>"  placeholder="Enter first name" >
<span class="error">* <?php echo $fnameerr;?></span>
<br><br>
mname:<input type="text" name="mname" value="<?php echo $mname; ?>"  placeholder="Enter middle name"  >
<span class="error">* <?php echo $mnameerr;?></span>
<br><br>
lname:<input type="text" name="lname" value="<?php echo $lname; ?>" placeholder="Enter last name"  >
<span class="error">* <?php echo $lnameerr;?></span>
<br><br>
</div>
<div>
age:<input type="number" name="age" value="<?php echo $age; ?>"   placeholder="Enter your age"  >
<span class="error">* <?php echo $ageerr;?></span>
<br><br>
</div>
<div>
city:<input type="text" name="city" value="<?php echo $city; ?>" placeholder="Enter your city" >
<span class="error">* <?php echo $cityerr;?></span>
<br><br>
</div>
<div>
email:<input type="email" name="email" value="<?php echo $email; ?>"  placeholder="Enter your email"  >
<span class="error">* <?php echo $emailerr;?></span>
<br><br>
</div>
<div>
phone:<input type="text" name="phone" value="<?php echo $phone; ?>"  placeholder="Enter your phone" >
<span class="error">* <?php echo $phoneerr;?></span>
<br><br>
</div>
<div>
edu:<input type="text" name="edu" value="<?php echo $edu; ?>"   placeholder="Enter your edu"  >
<span class="error">* <?php echo $eduerr;?></span>
<br><br>
</div>
<div>
  Website: <input type="text" name="website" value="<?php echo $website; ?>" >
  <mark><span class="error">* <?php echo $websiteerr;?></span></mark>
  <br><br>
  </div>
  <div>
  Comment:<br> 
  <textarea name="comment" rows="5" cols="40" <?php echo $comment; ?>></textarea>
  <span class="error">* <?php echo $commenterr;?></span>
  <br><br>
  </div>
  <div>
  Gender:
  <input type="radio" name="gender" <?php if(isset($gender)&& $gender=="female") echo "Checked"; ?>value="female" >Female
  <input type="radio" name="gender" <?php if(isset($gender)&& $gender=="male") echo "Checked"; ?> value="male">Male
  <input type="radio" name="gender" <?php if(isset($gender)&& $gender=="other") echo "Checked"; ?> value="other">Other
  <mark><span class="error">* <?php echo $gendererr;?></span></mark>
  <br><br>
  </div>
  <input type="submit" name="submit" value="Submit">  
</form>

<?php
if(isset($_POST['fname'],$_POST['mname'],$_POST['lname'],$_POST['age'],$_POST['city'],
$_POST['email'],$_POST['phone'],$_POST['edu'],$_POST['website'],$_POST['comment'],$_POST['gender'])){
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
}
?>

</body>
</html>