


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "phplogin";

// Create connection
//form_submit1.php
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$time=$_POST['time'];
$date=$_POST['date'];
$sql = "SELECT time FROM appointment where time='$time'";
$sqld = "SELECT date FROM appointment where date='$date'";
$result = $conn->query($sql);
$resultd = $conn->query($sqld);

if ($result->num_rows > 0 && $resultd->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "id: " ;
		header('Location:berror.html');
    }
	
} else {
  $conn->close();





$host = "localhost";
$db_name = "phplogin";
$username = "root";
$password = "";
$connection = null;







try{
$connection = new PDO("mysql:host=" . $host . ";dbname=" . $db_name, $username, $password);
$connection->exec("set names utf8");

}catch(PDOException $exception){
echo "Connection error: " . $exception->getMessage();
}





// Create connection
//form_submit1.php



function saveData($name, $tel, $gender ,$date,$time,$age,$reason){
global $connection;
$query = "INSERT INTO appointment(fname,tel,gender,date,time,reason,age) VALUES( :fname, :tel, :gender,:date,:time,:reason,:age)";

$callToDb = $connection->prepare( $query );
$name=htmlspecialchars(strip_tags($name));
$tel=htmlspecialchars(strip_tags($tel));
$gender=htmlspecialchars(strip_tags($gender));
$date=htmlspecialchars(strip_tags($date));
$time=htmlspecialchars(strip_tags($time));
$age=htmlspecialchars(strip_tags($age));
$reason=htmlspecialchars(strip_tags($reason));

$callToDb->bindParam(":fname",$name);
$callToDb->bindParam(":tel",$tel);
$callToDb->bindParam(":gender",$gender);

$callToDb->bindParam(":date",$date);
$callToDb->bindParam(":time",$time);
$callToDb->bindParam(":age",$age);
$callToDb->bindParam(":reason",$reason);












if($callToDb->execute()){
//return '<h3 style="text-align:center;">We will get back to you very shortly!</h3>';
header('location:success.html');
}
}

if( isset($_POST['submit'])){
	
$name = htmlentities($_POST['fname']);
$tel = htmlentities($_POST['tel']);
$gender = htmlentities($_POST['gender']);
$date = htmlentities($_POST['date']);
$time = htmlentities($_POST['time']);
$age = htmlentities($_POST['age']);
$reason = htmlentities($_POST['reason']);









//then you can use them in a PHP function. 
$result = saveData($name, $tel, $gender,$date,$time,$age,$reason);
echo $result;
}







 

}
$conn->close();
?>