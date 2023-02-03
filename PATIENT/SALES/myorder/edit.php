<?php
	session_start();
	include_once('../../../connection/conn.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$order_status = $_POST['order_status'];

		$sql = "UPDATE tbl_order SET order_status = '$order_status' WHERE id = '$id'";

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
		$_SESSION['error'] = 'Select to edit first';
	}

	header('location: index.php');

?>