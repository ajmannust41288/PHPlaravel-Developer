<?php
if(isset($_POST['name'],$_POST['email'],$_POST['password']))
{
    $name=htmlspecialchars($_POST['name']);
    $email=htmlspecialchars($_POST['email']);
    $password=htmlspecialchars($_POST['password']);
    echo "The name is   $name<br/>"; 
    echo "The email is  $email<br/>"; 
    echo "The entered password  is  $password"; 
}
else{
    echo "the field is not exited in the form ";
}
?>