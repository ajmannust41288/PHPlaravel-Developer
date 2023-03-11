<html>
    <head>
        <title>title</title>
    </head>
    <body>
<?php
if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
}
$connection= mysqli_connect("localhost","root","","login2");
if($connection){
    echo 'database connected ';
    
}
 else {
die("connection failed");    
}
$query="INSERT INTO aj(username,password)";
$query.="   VALUES('$username','$password')";
$result= mysqli_query($connection, $query);
    if($result){
        echo ('connection  exist');
            }
            else{
            die('not exist'.mysqli_error());
            }
?>
    </body>
</html>
