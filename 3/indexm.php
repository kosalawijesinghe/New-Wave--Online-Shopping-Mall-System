<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="signup.css">
<script src="signup.js"></script>

</head>
<body>

<h2>Sign up page</h2>


<center>
<hr id="test"/>
</center>

 

<br>
<br/>
<center >
<form id="form1" action="config.php" method="POST" onSubmit="return checkPassword()">
   <br/>
<input class="inputStyle1" id="checkBox1" type="radio" name="title" value="S" onclick="enableButton()"> 
<label>Seller</label> &nbsp &nbsp &nbsp;
<input class="inputStyle2" id="checkBox2" type="radio" name="title" value="C" onclick="enableButton()"> 
<label>Customer</label><br/><br/>
<input class="input" type="text" name="firstname" placeholder="First name" required> <br/><br/>
    <br/>
<input class="input" type="text" name="lastname" placeholder="Last name" required> <br><br/> 
  
   <br/>
<input class="input" type="phone" name="mobile"  pattern="[0-9]{10}" placeholder="Phone Number" required> <br/><br/>
    <br/>
<input class="input"  type="email" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> <br><br/>
    <br/>
<input class="input" type="password" name="password" id="pwd"  placeholder="Password" required> <br/><br/>
    <br/>
<input class="input" type="password" name="cnfrmpwd" id="cnfrmpwd" placeholder="Confirm Password" required> <br/><br/>
<br><input class="inputStyle" id="checkBox" type="checkbox" onclick="enableButton()"> Accept privacy policy and terms.<br/><br/>
<input type="submit" id="submitBtn" value="Sign Up" disabled>
</form>
</center>

<hr id="test"/>
<center>

</center>