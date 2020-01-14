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
				<a href="index.php"><i class="fas fa-calendar-week"></i>View User Appointments</a>
				<a href="index1.php"><i class="fas fa-calendar-week"></i>Registered Users</a>
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome Admin</p>
		</div>

	
	</body>
</html>