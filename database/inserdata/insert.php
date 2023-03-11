<?php  
 $name= $_POST['name'];
$email=$_POST['email'];
$conn=mysqli_connect('localhost','root','','insertdb');
$query="INSERT INTO `userdata`( `name`, `emailid`) VALUES ('$name','$email')";
$run=mysqli_query($conn,$query);
if($run==true)
echo "data inserted succesfully ";
else
echo "error occured ";


?>