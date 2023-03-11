
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<div>
fname:<input type="text" name="fname"   placeholder="Enter first name"  >

<br><br>
mname:<input type="text" name="mname"   placeholder="Enter middle name" required="required" >

<br><br>
lname:<input type="text" name="lname"  placeholder="Enter last name" required="required" >

<br><br>
</div>
<div>
age:<input type="number" name="age"   placeholder="Enter your age" required="required" >

<br><br>
</div>
<div>
city:<input type="text" name="city"  placeholder="Enter your city" required="required">

<br><br>
</div>
<div>
email:<input type="email" name="email"   placeholder="Enter your email" required="required" >

<br><br>
</div>
<div>
phone:<input type="text" name="phone"   placeholder="Enter your phone" required="required">

<br><br>
</div>
<div>
edu:<input type="text" name="edu"   placeholder="Enter your edu" required="required" >

<br><br>
</div>
<div>
  Website: <input type="text" name="website" required="required" >
  
  <br><br>
  </div>
  <div>
  Comment:<br> 
  <textarea name="comment" rows="5" cols="40"></textarea>
  
  <br><br>
  </div>
  <div>
  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  
  <br><br>
  </div>
  <input type="submit" name="submit" value="Submit">  
</form>
