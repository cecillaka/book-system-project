<?php
	include('conn.php');
	
	$id=$_GET['id'];
	
		$fname=$_POST['fname'];
		$tel=$_POST['tel'];
	$gender=$_POST['gender'];
	$date=$_POST['date'];
		$time=$_POST['time'];
	$reason=$_POST['reason'];
	$age=$_POST['age'];
	
	mysqli_query($conn,"update appointment set fname='$fname', gender='$gender', date='$date', time='$time', reason='$reason', age='$age' where id='$id'");
	header('location:index.php');

?>