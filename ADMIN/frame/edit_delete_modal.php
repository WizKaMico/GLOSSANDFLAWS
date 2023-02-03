


<!-- Approve -->
<div class="modal fade" id="approve_<?php echo $row['RIP']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Accept Schedule</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Accept</p>
			<!-- 	<h2 class="text-center"><?php echo $row['service_name']; ?></h2> -->
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="status.php?rip=<?php echo $row['RIP']; ?>&status=<?php echo 'APPROVE'; ?>" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Yes</a>
            </div>
 
        </div>
    </div>
</div>


<!-- Approve -->
<div class="modal fade" id="complete_<?php echo $row['RIP']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Complete Schedule</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Complete</p>
			<!-- 	<h2 class="text-center"><?php echo $row['service_name']; ?></h2> -->
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="status.php?rip=<?php echo $row['RIP']; ?>&status=<?php echo 'COMPLETE'; ?>" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Yes</a>
            </div>
 
        </div>
    </div>
</div>





<!-- Decline -->
<div class="modal fade" id="decline_<?php echo $row['RIP']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Decline Schedule</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Decline</p>
				<!-- <h2 class="text-center"><?php echo $row['service_name']; ?></h2> -->
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="status.php?rip=<?php echo $row['RIP']; ?>&status=<?php echo 'DECLINE'; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Decline</a>
            </div>
 
        </div>
    </div>
</div>