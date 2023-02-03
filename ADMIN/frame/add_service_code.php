<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['add_service'])){
		$service_name = $_POST['service_name'];
		$service_type = $_POST['service_type'];
		$service_image = $_POST['service_image'];
		$service_price_range = $_POST['service_price_range'];
		$service_desc = $_POST['service_desc'];

		$sql1 = "INSERT INTO services (service_name, service_type, service_price_range, service_desc) VALUES ('$service_name', '$service_type', '$service_price_range', '$service_desc')";

		//use for MySQLi OOP
		if($conn->query($sql1)){
			$_SESSION['success'] = 'category added successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: services.php');
?>