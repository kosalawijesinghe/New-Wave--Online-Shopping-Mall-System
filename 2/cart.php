<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>CRUD</title>
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/customerpage.css">

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
        <li><a href="#">Seller Account</a></li>
        <li><a href="#">Customer Account</a></li>
        <li><a href="#">Order History</a></li>
        <li>  <input type="text" name="search" placeholder="Browse Items">
          <input type="submit" value="Search"></li>
      </ul>
    </nav>
  </div>
   <!--Header end-->

<?php
$db = mysqli_connect("localhost:3306", "root", "", "new_wave");

// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    // Get the form data
    $product_name = $_POST['field1'];
    $product_code = $_POST['field2'];
    $price = $_POST['field3'];
    $quantity = $_POST['field4'];
    $description = $_POST['field5'];

    // Insert the new item into the cart table
    $query = "INSERT INTO cart (Item_name, Item_code, Price, Quantity, Item_description) VALUES ('$product_name', '$product_code', '$price', '$quantity', '$description')";
    $result = mysqli_query($db, $query);

    if ($result) {
        // Item added successfully
        echo "Item added to the cart!";
    } else {
        // Error occurred
        echo "Error: " . mysqli_error($db);
    }
}

// Read
$query = "SELECT * FROM cart";
$result = mysqli_query($db, $query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>CRUD</title>
</head>
<body>
    <fieldset>
    <h2>Add new item</h2>
    <form action="submitcart.php" method="POST">
        Item Name:
        <input type="text" name="field1"><br><br>
        Item Code:
        <input type="text" name="field2"><br><br>
        Price:
        <input type="text" name="field3"><br><br>
        Quantity:
        <input type="text" name="field4"><br><br>
        Description: <br>
        <textarea name="field5" id="" cols="50" rows="8"></textarea> <br>
        <input type="submit" name="submit" id="submitBtn" value="Submit">
    </form>
    </fieldset>
    <hr>

    <h3>Items</h3>
    <table style="width:80%" border="1">
        <tr>
            <th>Item Name</th>
            <th>Item Code</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Description</th>
            <th>Actions</th>
        </tr>

        <?php while ($item = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $item['Item_name']; ?></td>
                <td><?php echo $item['Item_code']; ?></td>
                <td><?php echo $item['Price']; ?></td>
                <td><?php echo $item['Quantity']; ?></td>
                <td><?php echo $item['Item_description']; ?></td>
                <td>
                    <form action="cart.php" method="POST">
                        <input type="hidden" name="itemId" value="<?php echo $item['Item_id']; ?>">
                        <input type="submit" name="edit" value="Edit">
                        <input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure you want to delete this item?')">
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>

    <?php if (isset($_POST['edit'])) : ?>
        <?php $editItemId = $_POST['itemId']; ?>
        <?php $editItemQuery = "SELECT * FROM cart WHERE Item_id=$editItemId"; ?>
        <?php $editItemResult = mysqli_query($db, $editItemQuery); ?>
        <?php $editItem = mysqli_fetch_assoc($editItemResult); ?>

        <h3>Edit Item</h3>
        <fieldset>
        <form action="submitcart.php" method="POST">
            <input type="hidden" name="itemId" value="<?php echo $editItem['Item_id']; ?>">
            Item Name:
            <input type="text" name="field1" value="<?php echo $editItem['Item_name']; ?>"><br><br>
            Item Code:
            <input type="text" name="field2" value="<?php echo $editItem['Item_code']; ?>"><br><br>
            Price:
            <input type="text" name="field3" value="<?php echo $editItem['Price']; ?>"><br><br>
            Quantity:
            <input type="text" name="field4" value="<?php echo $editItem['Quantity']; ?>"><br><br>
            Description: <br>
            <textarea name="field5" id="" cols="50" rows="8"><?php echo $editItem['Item_description']; ?></textarea> <br>
            <input type="submit" name="update" value="Update">
        </form>
        </fieldset>
    <?php endif; ?>

</body>
</html>

<?php
// Update
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['update'])) {
    // Get the form data
    $editItemId = $_POST['itemId'];
    $product_name = $_POST['field1'];
    $product_code = $_POST['field2'];
    $price = $_POST['field3'];
    $quantity = $_POST['field4'];
    $description = $_POST['field5'];

    // Update the item in the cart table
    $query = "UPDATE cart SET Item_name='$product_name', Item_code='$product_code', Price='$price', Quantity='$quantity', Item_description='$description' WHERE Item_id=$editItemId";
    $result = mysqli_query($db, $query);

    if ($result) {
        // Item updated successfully
        echo "Item updated!";
    } else {
        // Error occurred
        echo "Error: " . mysqli_error($db);
    }
}

// Delete
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    // Get the cart item ID to delete
    $deleteItemId = $_POST['itemId'];

    // Delete the item from the cart table
    $query = "DELETE FROM cart WHERE Item_id=$deleteItemId";
    $result = mysqli_query($db, $query);

    if ($result) {
        // Item deleted successfully
        echo "Item removed from the cart!";
    } else {
        // Error occurred
        echo "Error: " . mysqli_error($db);
    }
}

mysqli_close($db);
?>

<br><br><br>

<!--Footer start-->
<div class="footer">
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
          <img src="images/visa.png" height="50" width="50" >
          <img src="images/card.png" height="50" width="50"  >
          <img src="images/american-express.png" height="50" width="50"  >
          <img src="images/discover.png" height="50" width="50"  >
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
          
<!--footer end-->
</body>
</html>