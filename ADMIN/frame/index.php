

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>APPOINTMENT | FLOSS & GLOSS</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
	   <script src="https://www.paypal.com/sdk/js?client-id=AQn-FBXshx9d57vYxnzuB9xlT1KqXFhZTDKhXur-uK7fdv_tJWs4lx9AccIJEeJt1Hcig5UKg5P3pQ7_&currency=PHP"></script>
	<style>
		.height10{
			height:10px;
		}
		.mtop10{
			margin-top:10px;
		}
		.modal-label{
			position:relative;
			top:7px
		}
	</style>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="row">
		
			</div>
			<div class="row">
			
			</div>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>NAME</th>
						<th>EMAIL</th>
						<th>SERVICE</th>
						<th>APPOINTMENT DATE</th>
						<th>APPOINTMENT TIME</th>
						<th>RESERVATION STATUS</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT *,appointment.status AS RAP, appointment.appoint_id as RIP FROM `appointment` LEFT JOIN services ON appointment.service_id = services.service_id LEFT JOIN patient ON appointment.patient_id = patient.user_id ORDER BY appointment.appoint_id DESC";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['appoint_id']."</td>
									<td>".$row['fullname']."</td>
									<td>".$row['email']."</td>
									<td>".$row['service_name']."</td>
									<td>".date('F d, Y', strtotime($row['appoint_date']))."</td>
									<td>".$row['appoint_time']."</td>
									<td>".$row['RAP']."</td>
									<td>
										<a href='#approve_".$row['RIP']."' class='btn btn-success btn-sm' data-toggle='modal' style='width:100%;'><span class='glyphicon glyphicon-edit'></span> Accept</a>
										<a href='#complete_".$row['RIP']."' class='btn btn-success btn-sm' data-toggle='modal' style='width:100%; margin-top:10px;'><span class='glyphicon glyphicon-check'></span> Complete</a>
											<a href='#decline_".$row['RIP']."' class='btn btn-danger btn-sm' data-toggle='modal' style='margin-top:10px; width:100%;'><span class='glyphicon glyphicon-trash'></span> Decline</a>
							 		</td>
								</tr>";

									include('edit_delete_modal.php');
								
							}
							/////////////////

							//use for MySQLi Procedural
							// $query = mysqli_query($conn, $sql);
							// while($row = mysqli_fetch_assoc($query)){
							// 	echo
							// 	"<tr>
							// 		<td>".$row['id']."</td>
							// 		<td>".$row['firstname']."</td>
							// 		<td>".$row['lastname']."</td>
							// 		<td>".$row['address']."</td>
							// 		<td>
							// 			<a href='#edit_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span> Edit</a>
							// 			<a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span> Delete</a>
							// 		</td>
							// 	</tr>";
							// 	include('edit_delete_modal.php');
							// }
							/////////////////

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>


    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            style: {
                layout: 'vertical',
                color:  'gold',
                shape:  'pill',
                label:  'pay',
            }

        }).render('#paypal-button-container');
    </script>


<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
</body>
</html>