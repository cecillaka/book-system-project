<!-- Add New -->
    <div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <center><h4 class="modal-title" id="myModalLabel">Add New</h4></center>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="addnew.php">
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Usertname:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="username">
						</div>
					</div>
					
					
					
				
					
					
					
					
					
					
					
						<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">password:</label>
						</div>
						<div class="col-lg-10">
							<input type="password" class="form-control" name="password">
						</div>
					</div>
					
					
					
					
					
						<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">email:</label>
						</div>
						<div class="col-lg-10">
							<input type="email" class="form-control" name="email">
						</div>
					</div>
					
					
					
					
					
					
					
					
						
					
					
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Activation Code:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="activation_code">
						</div>
					</div>
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
				</form>
                </div>
				
            </div>
        </div>
    </div>
