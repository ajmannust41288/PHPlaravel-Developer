<?php  
//echo "Hello this is my first php";
$host="localhost";
$user="root";
$pass="";
$db="database2";
$con=mysqli_connect($host,$user,$pass,$db);
if($con)
echo "Database connnected successfuly";
$sql="insert into nust (username,password,email) values ('Noman','d123','Noman31288@gmail.com')";
$query=mysqli_query($con,$sql);
if($query)
echo "data inserted successfully";
?>