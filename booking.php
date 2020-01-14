<?php
//index.php

$error = '';
$name = '';

$email = '';
$subject = '';
$message = '';

function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

if(isset($_POST["submit"]))
{
	if(empty($_POST["name"]) )
	{
		$error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
	}
	else
	{
		$name = clean_text($_POST["name"]);
		if(!preg_match("/^[a-zA-Z ]*$/",$name))
		{
			$error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
		}
	}
	if(empty($_POST["email"]))
	{
		$error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
	}
	else
	{
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$error .= '<p><label class="text-danger">Invalid email format</label></p>';
		}
	}
	if(empty($_POST["subject"]))
	{
		$error .= '<p><label class="text-danger">Subject is required</label></p>';
	}
	else
	{
		$subject = clean_text($_POST["subject"]);
	}
	if(empty($_POST["message"]))
	{
		
		$error .= '<p><label class="text-danger">Message is required</label></p>';
	}
	else
	{
		$message = clean_text($_POST["message"]);
	}
	if($error == '')
	{
		require 'class/class.phpmailer.php';
		$mail = new PHPMailer;
		$mail->IsSMTP();								//Sets Mailer to send message using SMTP
		$mail->Host = 'smtp.gmail.com';		//Sets the SMTP hosts of your Email hosting, this for Godaddy
		$mail->Port = '587';								//Sets the default SMTP server port
		$mail->SMTPAuth = true;							//Sets SMTP authentication. Utilizes the Username and Password variables
		$mail->Username = 'ceciltebogolaka@gmail.com';					//Sets SMTP username
		$mail->Password = '0785246888^Lc';					//Sets SMTP password
		$mail->SMTPSecure = 'tls';							//Sets connection prefix. Options are "", "ssl" or "tls"
		$mail->From = $_POST["email"];					//Sets the From email address for the message
		$mail->FromName = $_POST["name"];				//Sets the From name of the message
		$mail->AddAddress('ceciltebogolaka@gmail.com', 'Name');		//Adds a "To" address
		$mail->AddCC($_POST["email"], $_POST["name"]);	//Adds a "Cc" address
		$mail->WordWrap = 50;							//Sets word wrapping on the body of the message to a given number of characters
		$mail->IsHTML(true);							//Sets message type to HTML				
		$mail->Subject = $_POST["subject"];				//Sets the Subject of the message
		$mail->Body = $_POST["message"];				//An HTML or plain text message body
		if($mail->Send())								//Send an Email. Return true on success or false on error
		{
			$error = '<label class="text-success">Thanks for booking, we will comfirm your appointment via Email</label>';
		}
		else
		{
			$error = '<label class="text-danger">There is an Error</label>';
		}
		$name = '';
		$email = '';
		$subject = '';
		$message = '';
	}
}
//<a class="header-logo" href="index.html">
//<img src ="pic/logo2.png" height="100" width="100">

//</a>
// <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
//<!-- Optional theme -->
//<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home Page</title>
		  <script type="text/javascript" src="impo.js"></script>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body onload="realtimeClock()">
	
		<nav class="navtop">
			<div>
				<h1>Doctor's Appointment Booking System</h1>
				
				<a href="home.php"><i class="fas fa-calendar-week"></i>Back</a>
				
				  
			</div>
			<div id="clock"></div>
		</nav>
	
		
		
	</head>
	







		<br />
		
		<div class="container">
			<div class="row">
				<div class="col-md-8" style="margin:0 auto; float:none;">
					<h1 class="headh" >Send us an email to book for your appointment</h1>
					<br />
					<?php echo $error; ?>
					<form method="post">
						<div class="form-groups">
							<label>Enter Name</label>
							<input type="text" name="name" placeholder="Enter Name"  class="form-control" value="<?php echo $name; ?>" />
						</div>
						<div class="form-groups">
							<label>Enter Email</label>
							<input type="text" name="email" class="form-control" placeholder="Enter Email" value="<?php echo $email; ?>" />
						</div>
						<div class="form-groups">
							<label>Reason For Appointment</label>
							<input type="text" name="subject" class="form-control" placeholder="Enter Subject" value="<?php echo $subject; ?>" />
						</div>
						<div class="form-groups">
							<label>Enter Message and please  specify time and Date for your Appointment</label>
							<textarea name="message" class="form-control" placeholder="Enter Message"><?php echo $message; ?></textarea>
						</div>
						<div class="form-groups" >
							<input type="submit" name="submit" value="Submit" class="btn btn-info" />
							<br>
							<br>
						</div>
						<br>
						<br>
					</form>
				</div>
			</div>
		</div>


		
	</body>
</html>





