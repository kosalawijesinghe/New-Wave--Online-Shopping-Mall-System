<?php
    include_once 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
  <title>Shopping Mall FAQ</title>
  <style>
    body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
  margin:0 250px;
  justify-content:center;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
  
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #04AA6D;
  color: black;
  text-align: left;
  padding: 12px;
  
  border: none;
  border-radius: 3px;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}
    
    
  
  </style>
</head>
<body>
<div class="container">
    <h3>Payment</h3>
	<label for="fname">Accepted Cards</label>
	<div class="icon-container">
	  <i class="fa fa-cc-visa" style="color:navy;"></i>
	  <i class="fa fa-cc-amex" style="color:blue;"></i>
	  <i class="fa fa-cc-mastercard" style="color:red;"></i>
	  <i class="fa fa-cc-discover" style="color:orange;"></i>
	</div>
	<label for="cname">Name on Card</label>
	<input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
	<label for="ccnum">Credit card number</label>
	<input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
	<label for="expmonth">Exp Month</label>
	<input type="text" id="expmonth" name="expmonth" placeholder="September">
	<label for="expyear">Exp Year</label>
	<input type="text" id="expyear" name="expyear" placeholder="2018">
	<label for="cvv">CVV</label>
	<input type="text" id="cvv" name="cvv" placeholder="352">
	<input type="submit" value="Next" class="btn">
</div>

</body>
</html>


<?php
    include_once 'footer.php';
?>