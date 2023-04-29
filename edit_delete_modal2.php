<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['Idrep']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Response</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit2.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['Idrep']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ID Response:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Idrep" value="<?php echo $row['Idrep']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">ID Reclamation:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="id_reclamation" value="<?php echo $row['id_reclamation']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Sujet :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="sujet" value="<?php echo $row['sujet']; ?>">
					</div>
				</div>


				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Message :</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Msg" value="<?php echo $row['Msg']; ?>">
					</div>
				</div>

				


            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['Idrep']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Response</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['Idrep'].' '.$row['id_reclamation']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete2.php?id=<?php echo $row['Idrep']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>