<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$city=$_POST['activation_code'];

		
		$sql = "INSERT INTO `accounts`( `username`, `email`,`password`,'activation_code') 
		VALUES ('$name','$email','$password','$city')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$name=$_POST['username'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$city=$_POST['activation_code'];
		$sql = "UPDATE `accounts` SET `username`='$name',`email`='$email',`password`='$password,'activation_code'=$city WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `accounts` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM accounts WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>