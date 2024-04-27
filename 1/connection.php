<?php



if($_SERVER['REQUEST_METHOD']=='POST'){
	$name = $_POST['name'];
    $email = $_POST['email'];
	$mobile = $_POST['mobile'];
    $address = $_POST['address'];
	$payment=$_POST['payment'];



$con = new mysqli('localhost:3306', 'root','', 'new_wave');

// Create connection

// Check connection
if ($con) {
	//echo "Connection successful";
	$sql= "insert into checkout (name,email,mobile,address,payment)
	values ('$name','$email','$mobile','$address','$payment')";
	$result=mysqli_query($con,$sql);
	if($result){
		echo "Data inserted are successfully";
	}
	else{
		die(mysqli_error($con));
	}
}
else{
	die(mysqli_error($con));
}
}

?>