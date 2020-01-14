<?

$conn=mysqli_connect('localhost','root','');
if(!$conn){
	echo "not connected";

}
if(!mysql_select_db($conn,'phplogin')){
	echo "not connected";
}


  $users_name = $_POST['fname'];
  $users_tel = $_POST['tel'];
  $users_gender = $_POST['gender'];
  $users_symptoms = $_POST['symptoms'];
  $users_date = $_POST['date'];
	  $users_time = $_POST['time'];
	 $users_reason = $_POST['reason'];
	  $users_age = $_POST['age'];





   $query = " INSERT INTO appointment (fname,tel,gender, date,time,symptoms,reason,age) VALUES ('$users_name',$users_tel','$users_gender',
        '$users_symptoms','$users_date','$users_time','$users_reason','$users_age')";
       

 if(!mysql_query($conn,$query))
 {
	  echo " not succesful"; 
 }

else
{
	 echo "succesful"; 
}

 




}
?>



