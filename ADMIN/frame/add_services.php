<!-- Add New -->
<div class="modal fade" id="addservices" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add Category</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add_service_code.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">NAME:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="service_name" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">TYPE:</label>
					</div>
					<div class="col-sm-10">
						<select name="service_type" class="form-control">
							<?php
							include_once('../../connection/connection.php');
							$service_query = "SELECT * FROM `service_category`";
							//use for MySQLi-OOP
							$query1 = $conn->query($service_query);
							while($crow = $query1->fetch_assoc()){
							?>
							<option value="<?php echo $crow['service_type']; ?>"><?php echo $crow['category_name']; ?></option>
							<?php } ?>	
						</select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">PRICE:</label>
					</div>
					<div class="col-sm-10">
						<input type="number" class="form-control" name="service_price_range" required>
					</div>
				</div>
					<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">DESC:</label>
					</div>
					<div class="col-sm-10">
						<textarea  class="form-control" name="service_desc"></textarea>
					</div>
				</div>
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add_service" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
			</form>
            </div>

        </div>
    </div>
</div>