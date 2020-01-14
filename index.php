<!DOCTYPE html>
<html>
<head>
	<title>Manage appointment</title>
	<link href="style.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>






	<nav class="navtop">
			<div>
				<h1>Aproved User Appointments</h1>
				<a href="admin.php"><i class="fas fa-user-circle"></i>back</a>
				
				  
			</div>
		</nav>







<div class="container">
	<div style="height:50px;"></div>
	<div class="well" style="margin:auto; padding:auto; width:80%;">
	<span style="font-size:25px; color:blue"><center><strong>Manage appointment</strong></center></span>	
		<span class="pull-left"><a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add New</a></span>
		<div style="height:50px;"></div>
		<table class="table table-striped table-bordered table-hover">
			<thead>
				<th>Full name</th>
				<th>cell Number</th>
				<th>gender</th>
				<th>date</th>
				<th>time</th>
				<th>reason</th>
				<th>age</th>
				<th>Action</th>
			</thead>
			<tbody>
			<?php
				include('conn.php');
				
				$query=mysqli_query($conn,"select * from `appointment`");
				while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><?php echo $row['fname']; ?></td>
						<td><?php echo $row['tel']; ?></td>
						<td><?php echo $row['gender']; ?></td>
						<td><?php echo $row['date']; ?></td>
						<td><?php echo $row['time']; ?></td>
						<td><?php echo $row['reason']; ?></td>
						<td><?php echo $row['age']; ?></td>
						<td>
							<a href="#edit<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a> || 
							<a href="#del<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
							<?php include('button.php'); ?>
						</td>
					</tr>
					<?php
				}
			
			?>
			</tbody>
		</table>
	</div>
	<?php include('add_modal.php'); ?>
</div>
</body>
</html>