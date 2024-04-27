<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="header.css">
<link rel="stylesheet" type="text/css" href="signup.css">
<link rel="stylesheet" type="text/css" href="footer.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<script src="signup.js"></script>

</head>
<body>



<!--Header start-->
  <div id="header">
    <h1>New Wave Shopping Mall</h1>
  </div>
  
  <div id="menu-bar-container">
    <label for="logo"></label>
    <img src="images/logo.jpg" alt="logo" width="100px" height="100px" border="1px">
    
    <nav id="menu-bar">
      <ul>
        <li><a href="#">Home</a></li>
        <li><a href="#">Category</a></li>
        <li><a href="seller.html">Seller Account</a></li>
        <li><a href="#">Customer Account</a></li>
        <li><a href="#">Order History</a></li>
        <li>
          <form>
            <input type="text" name="search" placeholder="Browse Items">
            <input type="submit" value="Search">
          </form>
        </li>
      </ul>
    </nav>
  </div>
   <!--Header end-->
   <br>
<h2>Sign up page</h2>

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
<label>
<input class="input" type="text" name="firstname" placeholder="First name" required></label> <br/><br/>
<br/><label>
<input class="input" type="text" name="lastname" placeholder="Last name" required></label> <br><br/> 
<br/>
<input class="input" type="phone" name="mobile"  pattern="[0-9]{10}" placeholder="Phone Number" required> <br/><br/>
<br/>
<input class="input"  type="email" name="email" placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required> <br><br/>
<br/>
<input class="input" type="password" name="password" id="pwd"  placeholder="Password" pattern="[0-9]{8}" required> <br/><br/>
<br/>
<input class="input" type="password" name="cnfrmpwd" id="cnfrmpwd" placeholder="Confirm Password" required> <br/><br/>
<br><input class="inputStyle" id="checkBox" type="checkbox" onclick="enableButton()"> Accept privacy policy and terms.<br/><br/>
<button type="type" id="submitbtn"><a href="login.html">sign up</a>
</button>
</form>
</center>


<center>

</center><br>
<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="footer-col">
				<h4>Customer care</h4>
					<ul>
						<li><a href="#">contact us</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a href="#">Feedback page</a></li>
					</ul>
				</div>
				<div class="footer-col">
				<h4>The New Wave</h4>
					<ul>
						<li><a href="#">About us</a></li>
						<li><a href="#">Privacy policy</a></li>
						<li><a href="term.html">Terms & conditions</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="footer-col">
				<h4>Payment method</h4>
					<div>
											<img src="C:\xampp\htdocs\The new wave\images\visa.png" height="50" width="50" >
						<img src="C:\xampp\htdocs\The new wave\images\card.png" height="50" width="50"  >
						<img src="C:\xampp\htdocs\The new wave\images\american-express.png" height="50" width="50"  >
						<img src="C:\xampp\htdocs\The new wave\images\discover.png" height="50" width="50"  >
						
					</div>
				</div>
				<div class="footer-col">
				<h4>Follow us</h4>
					<div class="social-links">
						<a href="#"><i class="fab fa-facebook-f"></i></a>
						<a href="#"><i class="fab fa-twitter"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
						<a href="#"><i class="fab fa-google-plus"></i></a>
						
					
					</div>
				</div>
			</div>
		</div>
	</footer>
		


</body>
</html>
