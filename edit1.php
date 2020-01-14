<?php
	include('conn1.php');
	
	$id=$_GET['id'];
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$activation_code=$_POST['activation_code'];
	
	
	mysqli_query($conn,"update accounts set username='$username', password='$password', email='$email', activation_code='$activation_code' where id='$id'");
	header('location:index1.php');

?>