

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
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
		
			</div>
			<div class="row">
			<a href="#addnew" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> ADD CATEGORY</a>
			<a href="#addservices" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> ADD SERVICES</a>
			</div>
			<div class="height10">
			</div>
			<div class="row">

				<table id="myTable" class="table table-bordered table-striped">
					<thead>
						<th>ID</th>
						<th>SERVICE</th>
						<th>TYPE</th>
						<th>PRICE</th>
						<th>DESCRIPTION</th>
						<th>ACTION</th>
					</thead>
					<tbody>
						<?php
							include_once('../../connection/connection.php');
							$sql = "SELECT * FROM services ";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['service_id']."</td>
									<td>".$row['service_name']."</td>
									<td>".$row['service_type']."</td>
									<td>".$row['service_price_range']."</td>
									<td>".$row['service_desc']."</td>
									<td>
									<a href='#edit_".$row['service_id']."' class='btn btn-success btn-sm' data-toggle='modal' style='width:100%;'><span class='glyphicon glyphicon-edit'></span> Edit</a> <br><br>
									<a href='#delete_".$row['service_id']."' class='btn btn-danger btn-sm' data-toggle='modal' style='width:100%;'><span class='glyphicon glyphicon-trash'></span> Delete</a>
							     	</td>
								</tr>";
								include('edit_new_services.php');
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
<?php include('add_modal.php') ?>
<?php include('add_services.php') ?>

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