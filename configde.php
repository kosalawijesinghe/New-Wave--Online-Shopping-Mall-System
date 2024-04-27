<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
	$title = $_POST['title'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
	$cnfrmpwd=$_POST['cnfrmpwd'];



$con = new mysqli('localhost', 'root','', 'signup');

// Create connection

// Check connection
if ($con) {
	//echo "Connection successful";
	$sql= "insert into `signup db` (title,firstname,lastname,mobile,email,password,cnfrmpwd)
	values ('$title','$firstname','$lastname','$mobile','$email','$password','$cnfrmpwd')";
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