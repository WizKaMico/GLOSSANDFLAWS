<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['agree'])){
		$appoint_id = $_POST['appoint_id'];
		$status = $_POST['status'];
		$user_id  = $_POST['user_id'];

		$sql = "UPDATE appointment SET status = '$status' WHERE appoint_id = '$appoint_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Member updated successfully';
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

	header('location: index.php?user_id='.$user_id);

?>