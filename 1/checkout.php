<?php
  require 'connection.php';
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
  
  <div class="checkout-form">
    <form method="post" action="submitcheck.php">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="mobile">Mobile:</label>
        <input type="tel" id="mobile" name="mobile" required>
      </div>
      <div class="form-group">
        <label for="address">Address:</label>
        <textarea id="address" name="address" rows="4" required></textarea>
      </div>
      <div class="form-group">
        <label for="payment">Payment Method:</label>
        <select id="payment" name="payment" required>
          <option value="Credit Card">Credit Card</option>
		  <option value="Debit Card">Debit Card</option>
		  <option value="Pay pal">Pay pal</option>
        </select>
      </div>
      <div class="form-group">
        <input type="submit" value="Place Order">
      </div>
    </form>
  </div>
</body>
</html>
