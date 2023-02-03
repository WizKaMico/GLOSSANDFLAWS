<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['appoint_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">TERMS AND CONDITION</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
			
			<h5>TERMS AND CONDITIONS</h5
            <p>We are Floss and Gloss Dental Clinic and we own and operate this website (website ng gloss and floss).
By using this site, you have accepted and agreed by these terms of use. Your use of the products and services made available to you through our website is likewise regulated by this agreement and you acknowledge that you have read, understood, and agree to be bound by all of the terms, conditions, and disclaimers contained herein with respect to your use of the Website. Without prior warning, these terms and conditions may occasionally change. Only use this website if you comprehend and accept the mentioned terms.</p><br>
<h5>Intellectual Property</h5>
<p>This website is accessible for everyone. All materials (pictures, text, videos, interface, graphics) used in this website are owned by the Floss and Gloss Dental clinic. Republishing, reproducing or duplicating, and redistributing contents and materials are STRICTLY PROHIBITED. 
Privacy Policy / Collection of Information</p>
<p>Gloss and Floss Dental Clinic respects the rights of the customers and website visitors to privacy. Records and information collected form the customers will be kept confidential and private and will be used and processed in accordance with the DATA PRIVACY ACT of 2012. </p>

			    </p>
			     <input type="hidden" name="appoint_id" value="<?php echo $row['appoint_id']; ?>">
			     <input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
			    <input type="hidden" name="status" value="PROCESSING">
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="agree" class="btn btn-success"><span class="glyphicon glyphicon-check"></span>I AGREE</a>
			</form>
            </div>

        </div>
    </div>
</div>


<!-- PAID -->
<div class="modal fade" id="paid_<?php echo $row['appoint_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">SCAN OR PRINT</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="#">
					<input type="hidden" name="code" value="<?php echo $row['appoint_id']; ?>" class="form-control"/>
					<br >
					<button class="btn btn-primary form-control" name="generate">Generate</button>
				</form>
				
				<?php 
					if(ISSET($_POST['generate'])){
						if($_POST['code'] != ""){
							
						
				?>
					<center><img src="generate.php?code=<?php echo $_POST['code']?>" alt=""></center>
				<?php
						}
					}
				?>

        </div>
    </div>
</div>
</div>
</div>

