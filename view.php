<?php

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>Appointment Booking System</h1>
				
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				<a href="main.php"><i class="fas fa-calendar-week"></i>View User Appointments</a>
				<a href="admin.php"><i class="fas fa-calendar-week"></i>Admin Home</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Registered Users</p>
		</div>
	
<div class="table101">	
<table>
          <tr>
              <th>ID</th>
              <th>Username</th>
              <th>Email Address</th>
          </tr>
          <tr>		
		
   <?php
session_start();
// Change this to your connection info.
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';
// Try and connect using the info above.
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, email FROM accounts where username!='admin101'";
$result = $conn->query($sql);

  

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
      //  echo "<tr><td> id: ". $row["id"]. "</td><td> Name: ". $row["username"]." " ."</td><td> email: " . $row["email"] . "</td></tr>";
		
	 ?>
        <tr>
            <td><?php echo $row['id']; ?></td> 
            <td><?php echo $row['username']; ?></td> 
            <td><?php echo $row['email']; ?></td> 
			
        </tr>
        <?php
}
}
 else
	 {
    echo "0 results";
}

$conn->close();
?>
</table>
	</div>
	
	</body>
</html>