<?php 

   
    $conn=mysqli_connect("localhost","root","","new_wave"); 
    if(!$conn) { die(" Connection Error "); } 

    $query = " select * from contact_us ";
    $result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
 
    <title>View Records</title>
</head>
<body >
<center>
<table border="2" style="background-color:rgb(230, 226, 226)">
    <tr>
        <td> ID </td>
        <td> Name </td>
        <td> Email </td>
        <td> Description </td>
        <td> Edit </td>
        <td> Delete </td>
    </tr>

<?php 
                                    
     while($row=mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            $name = $row['name'];
            $email = $row['email'];
            $description = $row['description'];
?>
    <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $name ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $description ?></td>
            <td><a href="edit_A.php?GetID=<?php echo $id ?>">Edit</a></td>
            <td><a href="delete_A.php?Del=<?php echo $id ?>">Delete</a></td>
    </tr>        
<?php 
     }  
 ?>                                                                    
                                   
</center>
</table>
 
    
</body>
</html>