<?php
include_once 'configko.php';

if (isset($_POST["field1"]) && isset($_POST["field2"]) && isset($_POST["field3"]) && isset($_POST["field4"]) && isset($_POST["field5"])) {
    $product_name = $_POST['field1'];
    $product_code = $_POST['field2'];
    $price = $_POST['field3'];
    $quantity = $_POST['field4'];
    $description = $_POST['field5'];
    
    $sql = "INSERT INTO cart (Item_id, Item_name, Item_description, Price, Quantity, Item_code) VALUES ('', '$product_name', '$description', '$price', '$quantity', '$product_code')";
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Record Inserted successfully')</script>";
    } else {
        echo "<script>alert('Record Insert failed')</script>";
    }
} else {
    echo "<script>alert('Invalid form data')</script>";
}
?>
