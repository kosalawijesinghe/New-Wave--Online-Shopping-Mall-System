<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve the form data
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Your database credentials
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "signup";

    // Create a connection to MySQL
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Check the connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare a SQL query to check the user credentials
    $sql = "SELECT * FROM `signup db` WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);

    // Check if the query returned any rows
    if ($result->num_rows > 0) {
        // User authenticated successfully
        // You can perform further actions here, such as setting session variables
        echo "Login successful!";
    } else {
        // Invalid credentials
        $error = "Invalid username or password.";
        // Redirect back to the login page with an error message
        header("Location: login.php?error=" . urlencode($error));
        exit();
    }

    // Close the database connection
    $conn->close();
}
?>
