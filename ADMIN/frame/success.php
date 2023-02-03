<?php
	session_start();
	
	include_once('../../connection/connection.php');
    $user_id = $_GET['user_id'];
	if(isset($_GET['appoint_id'])){
		$sql = "UPDATE appointment SET status='PAID' WHERE appoint_id = '".$_GET['appoint_id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in deleting member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to delete first';
	}

	header('location: index.php?user_id='.$user_id);
?>