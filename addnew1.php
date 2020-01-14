<?php
	include('conn1.php');
	
		$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
		$activation_code=$_POST['activation_code'];
	
	mysqli_query($conn,"insert into accounts (username, password, email,activation_code) values ('$username', '$password', '$email', '$activation_code')");
	header('location:index1.php');

?>