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
			<form method="POST" action="add.php">
				<div class="row form-group">

				    <div class="col-sm-2">
						<label class="control-label modal-label">ID :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id" required>
					</div>
					
					<div class="col-sm-2">
						<label class="control-label modal-label">ID_rec:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="ID_rec" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">firstname:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="firstname" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Adresse:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Address" required>
					</div>
				</div>

				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Phone:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Phone" required>
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Message_rec:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Message_rec" required>
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Email:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Email" required>
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Role:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="role" required>
					</div>
				</div>


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>