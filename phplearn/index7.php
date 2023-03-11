<HTML> 
<!-- jobapp.html --> 
 <BODY> 
 <H1><mark>Bilal  Group of company Registration form</mark></H1> 
 <P>Are you looking for an exciting services in the world of Technology? 
 Look no further! 
 </P> 
 <FORM NAME='frmJobApp' METHOD="post" ACTION="<?php  htmlspecialchars($_SERVER["REQUEST_METHOD"]=="PHP_SELF"); ?>"> 
 Please enter your name: 
 <INPUT NAME="applicant" TYPE="text"><BR> 
 Please enter your telephone number: 
 <INPUT NAME="phone" TYPE="text"><BR> 
 Please enter your E-mail address: 
 <INPUT NAME="email" TYPE="text"><BR> 
 Please select the type of services in which you need: 
 <SELECT NAME="position"> 
 <OPTION VALUE="acounting all services avalaible ">Accounting</OPTION> 
 <OPTION VALUE="Motorcycle cash system available">Motorcycle cash system</OPTION> 
 <OPTION VALUE="Testing Qualified staff">Testing servives</OPTION> 
 <OPTION VALUE="Management Team ">Management team</OPTION> 
 <OPTION VALUE="sales team member">Sales team</OPTION> 
 <option value="NUST Engineer">IT Engineer</option>
 </SELECT><BR> 
 Please select the city in which you would like to want to purchase: 
 <SELECT NAME="city"> 
 <OPTION VALUE="islamabad">islamabad</OPTION> 
 <OPTION VALUE="lahore">lahore</OPTION> 
 <OPTION VALUE="peshawar">peshawar</OPTION> 
 <OPTION VALUE="Bannu">Bannu</OPTION> 
 <OPTION VALUE="Rawalpindi">Rawalpindi</OPTION> 
 </SELECT><BR> 
 <INPUT NAME="avail" TYPE="checkbox"> Agree to terms and polices<BR><BR> 
 <INPUT NAME="enter" TYPE="submit" VALUE="Enter"> 
 <INPUT TYPE="button" VALUE="Go Back" ONCLICK="self.history.back()";>
 </FORM> 
 <br>
 <br>
 <h2 style="color:green ;">Your input data are given below </h2>
 </BODY> 
 </HTML>
 <?php 
 if(isset($_POST['applicant'],$_POST['phone'],$_POST['email'],$_POST['position'],
 $_POST['city'])) {
    $applicant=$_POST['applicant'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $position=$_POST['position'];
    $city=$_POST['city'];
    $avail=$_POST['avail'];
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
    echo $avail."   agreed";
    echo "<br/>";
 }
 else{
    echo "something is missing";
 }
