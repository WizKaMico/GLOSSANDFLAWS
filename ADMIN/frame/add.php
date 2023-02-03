<?php
	session_start();
	include_once('../../connection/connection.php');

	if(isset($_POST['add'])){
		$category_name = $_POST['category_name'];

		$sql = "INSERT INTO service_category (category_name) VALUES ('$category_name')";

		//use for MySQLi OOP
		if($conn->query($sql)){
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