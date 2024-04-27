<?php 

   
    $con=mysqli_connect("localhost:3306","root","","new_wave"); 
    if(!$con) { die(" Connection Error "); } 

    $query = " select * from `signup db` ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE html>
<html>
<head>
  
    <title>View Records</title>
</head>
<body >

<table>
    <tr>
        <td> ID </td>
        <td> Title </td>
        <td> Firstname </td>
        <td> Lastname </td>
        <td> Mobile </td>
        <td> Email </td>
        <td> Password </td>
        <td> Cnfrmpwd </td>
        <td> Edit </td>
        <td> Delete </td>
    </tr>

<?php 
                                    
     while($row=mysqli_fetch_assoc($result))
        {
            $id = $row['id'];
            $title = $row['title'];
            $firstname = $row['firstname'];
            $lastname = $row['lastname'];
            $mobile = $row['mobile'];
            $email = $row['email'];
            $password = $row['password'];
            $cnfrmpwd = $row['cnfrmpwd'];
?>
    <tr>
            <td><?php echo $id ?></td>
            <td><?php echo $title ?></td>
            <td><?php echo $firstname ?></td>
            <td><?php echo $lastname ?></td>
            <td><?php echo $mobile ?></td>
            <td><?php echo $email ?></td>
            <td><?php echo $password ?></td>
            <td><?php echo $cnfrmpwd ?></td>
            <td><a href="edit.php?GetID=<?php echo $id ?>">Edit</a></td>
            <td><a href="delete.php?Del=<?php echo $id ?>">Delete</a></td>
    </tr>        
<?php 
		}
				
 ?>                                                                    
                                   

              </table>
 
    
</body>
</html>