<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['agree'])){
		$service_id = $_POST['service_id'];
		$service_name = $_POST['service_name'];
		$service_type = $_POST['service_type'];
		$service_price_range = $_POST['service_price_range'];
		$service_desc = $_POST['service_desc'];

		$sql = "UPDATE services SET service_name = '$service_name', service_type = '$service_type', service_price_range = '$service_price_range', service_desc = '$service_desc'  WHERE service_id = '$service_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: services.php');

?>