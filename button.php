<!-- Delete -->
    <div class="modal fade" id="del<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Delete</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$del=mysqli_query($conn,"select * from appoitment where id='".$row['id']."'");
					$drow=mysqli_fetch_array($del);
				?>
				<div class="container-fluid">
					<h5><center>Full name: <strong><?php echo $drow['fname']; ?></strong></center></h5> 
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>
                </div>
				
            </div>
        </div>
    </div>
<!-- /.modal -->

<!-- Edit -->
    <div class="modal fade" id="edit<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Edit</h4></center>
                </div>
                <div class="modal-body">
				<?php
					$edit=mysqli_query($conn,"select * from appointment where id='".$row['id']."'");
					$erow=mysqli_fetch_array($edit);
				?>
				<div class="container-fluid">
				<form method="POST" action="edit.php?id=<?php echo $erow['id']; ?>">
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Full name:</label>
						</div>
						
						<div class="col-lg-10">
							<input type="text" name="fname" class="form-control" value="<?php echo $erow['fname']; ?>">
						</div>
					</div
					
					
					
					
					
					
					
					
							<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Cell Number:</label>
						</div>
						<div class="col-lg-10">
							<input type="tel" name="tel" class="form-control" value="<?php echo $erow['tel']; ?>">
						</div>
					</div>
					
					
					
					
							<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Gender:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="gender" class="form-control" value="<?php echo $erow['gender']; ?>">
						</div>
					</div>
					
					
					
					
							<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">Date:</label>
						</div>
						<div class="col-lg-10">
							<input type="date" name="date" class="form-control" value="<?php echo $erow['date']; ?>">
						</div>
					</div>
					
					
					
					
							<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">time:</label>
						</div>
						<div class="col-lg-10">
							<input type="time" name="time" class="form-control" value="<?php echo $erow['time']; ?>">
						</div>
					</div>
					
					
					
					
					
					
					
					
							<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">reason:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" name="reason" class="form-control" value="<?php echo $erow['reason']; ?>">
						</div>
					</div>
					
					
					
					
					
					
					
						
					
					
					
					
					
					
					
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label style="position:relative; top:7px;">age:</label>
						</div>
						<div class="col-lg-10">
							<input type="number" name="age" class="form-control" value="<?php echo $erow['age']; ?>">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-warning"><span class="glyphicon glyphicon-check"></span> Save</button>
                </div>
				</form>
            </div>
        </div>
    </div>
<!-- /.modal -->