<?php
	session_start();
	include '../../connection/connection.php';

	if(isset($_POST['submit'])){
	
		
		$category_name = strtoupper(str_replace(" ", "_", $_POST['category_name']));

		
		$sql = "INSERT INTO  tbl_category (category) VALUES ('$category_name')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = ' ADDED SUCCESFULLY';
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

	header('location: ../index.php?view=SHOPCONTENT');
?>