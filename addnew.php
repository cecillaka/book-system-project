<?php
	include('conn.php');
	
	$fname=$_POST['fname'];
	$tel=$_POST['tel'];
	$gender=$_POST['gender'];
	$date=$_POST['date'];
		$time=$_POST['time'];
	$reason=$_POST['reason'];
	$age=$_POST['age'];
	
	mysqli_query($conn,"insert into appointment (fname, tel, gender, date,time,reason,age) values ('$fname',  '$tel', '$gender', '$date', '$time', '$reason', '$age')");
	header('location:index.php');

?>