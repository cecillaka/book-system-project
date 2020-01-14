<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
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
				<h1> Appointment Booking System</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
				<a href="book.html"><i class="fas fa-calendar-week"></i>Book Now</a>
				<a href="health.php"><i class="fas fa-calendar-week"></i>Health Tips</a>
			
				  
			</div>
		</nav>
		<div class="content">
			<h2>Home Page</h2>
			<p>Welcome back, <?=$_SESSION['name']?>!</p>
		</div>
		<div class="welcome">Welcome! Book Your Appointment Now</div>
	
		
<div class="contacts">

      
  <div class="cc"><i class="fa fa-phone-square" aria-hidden="true"></i>Tel Number</div>
  <div class="cc">    (011) 360 2956</div>
  <br>

  <div class="cc"><i class="fa fa-envelope" aria-hidden="true"></i>Working Hours</div>
  <br>
  <div class="cc">     Mon-Fri   08:00 -17:00</div>
  <div class="cc">     Saturday  09:00 -13:00</div>
  <div class="cc">     Sunday    09:00 -10:00</div>
  <br>
  <div class="cc"><i class="fa fa-map-marker" aria-hidden="true"></i>Located</div>
  <div class="cc">    Krugersdorp  1200 St Drive</div>
  <div class="cc">    1754</div>
  <div class="cc">    West Rand</div>
  <br>
        <br>
</div>
	</body>
</html>