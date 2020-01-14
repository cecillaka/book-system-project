<?php
	include('conn1.php');
	$id=$_GET['id'];
	mysqli_query($conn,"delete from accounts where id='$id'");
	header('location:index1.php');

?>