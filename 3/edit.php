<?php 

    $con=mysqli_connect("localhost:3306","root","","new_wave"); 
    if(!$con) { die(" Connection Error "); } 

     if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = " select * from `signup db` where id='".$id."'";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
		$title=$row['title'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $mobile = $row['mobile'];
        $email = $row['email'];
        $password = $row['password'];
        $cnfrmpwd = $row['cnfrmpwd'];
    }
	 }
?>
<!DOCTYPE html>
<html >
<head>
  
	<link rel="stylesheet" type="text/css" href="signup.css">
	<script src="signup.js"></script>
  
    <title>Document</title>
</head>


   <body>

<h2>Update page</h2>


<center>

</center>
<br>
<br/>
<center >
<form id="form1" action="signup.php" method="POST" onSubmit="return checkPassword()">
<br/>
<input class="inputStyle1" id="checkBox1" type="radio" name="title" value="S" onclick="enableButton()"> 
<label>Seller</label> &nbsp &nbsp &nbsp;
<input class="inputStyle2" id="checkBox2" type="radio" name="title" value="C" onclick="enableButton()"> 
<label>Customer</label><br/><br/>
<input class="input" type="text" name="firstname" placeholder="First name" required></label> <br/><br/>
<br/><label>
<input class="input" type="text" name="lastname" placeholder="Last name" required></label> <br><br/> 
<br/>
<input class="input" type="phone" name="mobile"  pattern="[0-9]{10}" placeholder="Phone Number" required> <br/><br/>
<br/>
<input class="input"  type="email" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> <br><br/>
<br/>
<input class="input" type="password" name="password" id="pwd"  placeholder="Password" required> <br/><br/>
<br/>
<input class="input" type="password" name="cnfrmpwd" id="cnfrmpwd" placeholder="Confirm Password" required> <br/><br/>
<br><input class="inputStyle" id="checkBox" type="checkbox" onclick="enableButton()"> Accept privacy policy and terms.<br/><br/>
<input type="submit" id="submitBtn" value="Update" disabled>
</form>
</center>


<center>

</center>
    
</body>
</html>