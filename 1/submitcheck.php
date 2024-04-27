<?php

require 'connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $address = $_POST['address'];
    $payment = $_POST['payment'];

    $sql = "INSERT INTO checkout (name, email, mobile, address, payment)
            VALUES ('$name', '$email', '$mobile', '$address', '$payment')";

    if ($con->query($sql) === TRUE) {
        //echo "Order placed successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }
}
?>
<br><br><hr><br>
<?php 

   
    $con=mysqli_connect("localhost:3306","root","","new_wave"); 
    if(!$con) { die(" Connection Error "); } 

    $query = " select * from `checkout` ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>View Records</title>
<style>
	table, th, td {
		border: 1px solid;
	}
</style>
</head>
<body >

<table>
    <tr>
        <td> Name </td>
        <td> Email </td>
        <td> Mobile </td>
        <td> Address </td>
        <td> Payment </td>
        <td> Edit </td>
        <td> Delete </td>
    </tr>


<?php 
                                    
     while($row=mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $mobile = $row['mobile'];
            $address = $row['address'];
			$payment = $row['payment'];
			
		}
?>
    <tr>
        
            <td><?php echo $name ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $mobile ?></td>
            <td><?php echo $address ?></td>
            <td><?php echo $payment ?></td>
            <td><a href="edit.php?GetID=<?php echo $id ?>">Edit</a></td>
            <td><a href="delete.php?Del=<?php echo $id ?>">Delete</a></td>
    </tr>        
</table>
    
</body>
</html>