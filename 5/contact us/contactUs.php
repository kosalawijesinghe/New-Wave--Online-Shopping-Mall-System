<?php include "db.php";?>
<!DOCTYPE HTML>
<html>
<head>
	<title>The New Wave</title>
    <link rel="stylesheet" type="text/css" href="ContactStyle.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<link rel="stylesheet" type="text/css" href="footer.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<header class="head">
	<div id ="header">
		<h1>The New Wave Shopping mall</h1>
	</div>
	<div id="menu-bar-container">
		<label for="logo"></label>
		<img src="img\logo.jpg" alt="logo" width="100px" height="100px" border="1px">
		<nav id="menu-bar">
			<ul>
				<li><a href="#">Home</a></li>
				<li><a href="#">Category</a></li>
				<li><a href="#">Seller Account</a></li>
				<li><a href="#">Customer Account</a></li>
				<li><a href="#">Order History</a></li>
			</ul>
		</nav>
	</div>
</header>
<hr>
<body class="body">
<h1><u>CONTACT US</u><h1>
<h2 class="div">CONTACT CUSTOMER SUPPORT</h2>
<p align="center" class="para">If you have any questions about our products or services please contact us. Here's how you can reach us!</p>

<form class="form" action="contact.php" method="post" onsubmit="onFormSubmit()">
	<fieldset class="fld" style="width:780px ;height:520px">
		<h2 class="div">TEXT US</h2>
		Name:<br>
        <input type="text" id="name" name="name" placeholder="Name" required><br><br>
        Email:<br>
        <input type="email" id="mail" name="email" placeholder="Email" pattern="[a-z0-9. %+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required><br><br>
        
        <textarea name="description" id="help" rows="15" cols="50" placeholder="Describe your needs" required></textarea><br><br>
		<center>
			<input type="Submit" value="Submit" id="submitBtn" class="bttn" name="Submit"><br><br>
			 
		</center>

	</fieldset>
</form>
<hr>
<footer>
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
						<li><a href="#">Terms & conditions</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="footer-col">
				<h4>Payment method</h4>
					<div>
						<img src="img/visa.png" height="50" width="50" >
						<img src="img/card.png" height="50" width="50"  >
						<img src="img/american-express.png" height="50" width="50"  >
						<img src="img/discover.png" height="50" width="50"  >
						
						
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