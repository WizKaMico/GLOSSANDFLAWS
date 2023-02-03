<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_GET['service_id'])){
		$sql = "DELETE FROM services WHERE service_id = '".$_GET['service_id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting';
		}
	}
	else{
		$_SESSION['error'] = 'Select service to delete first';
	}

	header('location: services.php');
?>