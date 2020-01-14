<?php
include 'database.php';

if(count($_POST)>0){
	if($_POST['type']==1){
		$name=$_POST['fname'];
		$tel=$_POST['tel'];
		$gender=$_POST['gender'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$reason=$_POST['reason'];
		$age=$_POST['age'];

		
		$sql = "INSERT INTO `appointment`( `fname`, `tel`,`gender`,'date','time','reason','age') 
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
			$name=$_POST['fname'];
		$tel=$_POST['tel'];
		$gender=$_POST['gender'];
		$date=$_POST['date'];
		$time=$_POST['time'];
		$reason=$_POST['reason'];
		$age=$_POST['age'];
		
		$sql = "UPDATE `appointment` SET `fname`='$name',`gender`='$gender',`date`='$date,'time'=$time,'reason'=$reason,'age'=$age WHERE id=$id";
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
		$sql = "DELETE FROM `appointmet` WHERE id=$id ";
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
		$sql = "DELETE FROM appointment WHERE id in ($id)";
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