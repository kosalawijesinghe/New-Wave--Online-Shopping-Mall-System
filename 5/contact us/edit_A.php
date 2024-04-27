<?php 

    $conn=mysqli_connect("localhost","root","","new_wave"); 
    if(!$conn) { die(" Connection Error "); } 

    $id = $_GET['Getid'];
    $query = " select * from contact_us where id='".$id."'";
    $result = mysqli_query($conn,$query);

    while($row=mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $name = $row['name'];
        $email = $row['email'];
        $description = $row['description'];
    
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>


   <body>

<h2>Update page</h2>


<center>

</center>
<br>
<br/>
<center >
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


<center>

</center>
    