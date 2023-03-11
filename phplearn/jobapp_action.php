<HTML> 
<!-- jobapp_action.php --> 
 <BODY> 
 <?php 
 if(isset($_POST['applicant'],$_POST['phone'],$_POST['email'],$_POST['position'],
 $_POST['city'])) {
    $applicant=$_POST['applicant'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $position=$_POST['position'];
    $city=$_POST['city'];
    echo $applicant;
    echo "<br/>";
    echo $phone;
    echo "<br/>";
    echo $email;
    echo "<br/>";
    echo $position;
    echo "<br/>";
    echo $city;
    echo "<br/>";
 }
 else{
    echo "something is missing";
 }
/////////////////////////////////////
// require ("index7.php"); 
//  echo ("<B>You have submitted the following:</B>" ."<br/>".
//    // New line constant 
//  "Name: $applicant" . "<br/>" . 
//  "Phone: $phone" . "<br/>"  . 
//  "E-mail: $email" . "<br/>" .
// "position:$position"."<br/>" .
// "city:$city"."<br/>" ); 
//  // Convert to boolean 
//  $avail = isset ($avail); 
//  echo ("Available immediately: " . ($avail ? "yes" : "no"));
 ?> 
 </BODY> 
</HTML>