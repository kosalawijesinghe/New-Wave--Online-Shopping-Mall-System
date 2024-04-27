<?php 

    $con=mysqli_connect("localhost:3306","root","","new_wave"); 
    if(!$con) { die(" Connection Error "); } 

    
    $query = " select * from `checkout`";
    $result = mysqli_query($con,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
		$name=$row['name'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $address = $row['address'];
        $payment = $row['payment'];
      
    }



?>
<!DOCTYPE html>
<html>
<head>
  <title>Checkout Page</title>
  <style>
   
body {
  font-family: Arial, sans-serif;
}

h1 {
  text-align: center;
}

.checkout-form {
  max-width: 400px;
  margin: 0 auto;
}

.form-group {
  margin-bottom: 15px;
}

.form-group label {
  display: block;
  margin-bottom: 5px;
}

.form-group input[type="text"],
.form-group input[type="email"],
.form-group input[type="tel"],
.form-group select {
  width: 100%;
  padding: 8px;
  border: 1px solid orange;
  border-radius: 4px;
}

.form-group textarea {
  width: 100%;
  padding: 8px;
  border: 1px solid orange;
  border-radius: 4px;
}

.form-group input[type="submit"] {
  background-color: orange;
  color: white;
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.form-group input[type="submit"]:hover {
  background-color: darkorange;
}

.order-details {
  border: 1px solid orange;
  padding: 15px;
  margin: 20px 200px;
}

.order-details h2 {
  margin-top: 0;
  margin-bottom: 10px;
}

.order-details table {
  width: 100%;
  border-collapse: collapse;
 
  padding: 30px;
}

.order-details th,
.order-details td {
  padding: 8px;
  border-bottom: 1px solid orange;
}

.order-details th {
  text-align: left;
}

  </style>
</head>
<body>
  <h1>Checkout</h1>
  <div class="order-details">
    <h2>Order Details</h2>
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Price</th>
      </tr>
      <tr>
        <td>Product 1</td>
        <td>2</td>
        <td>$20.00</td>
      </tr>
      <tr>
        <td>Product 2</td>
        <td>1</td>
        <td>$15.00</td>
      </tr>
      <tr>
        <td colspan="2">Total:</td>
        <td>$55.00</td>
      </tr>
    </table>
  </div>
  <div class="checkout-form">
    <form>
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="payment">Payment Method:</label>
        <select id="payment" name="payment-method" required>
          <option value="credit-card">Credit Card</option>
          <option value="Debit Card">Debit Card</option>
		  <option value="Pay pal">Pay pal</option>
        </select>
      </div>
      <div class="form-group">
       <button><a href=" ">place order</a> </button>
      </div>
    </form>
  </div>

  
</body>
</html>
