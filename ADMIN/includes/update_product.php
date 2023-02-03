<?php
	session_start();
	include '../../connection/connection.php';

	if(isset($_POST['submit'])){
	
		
		$id = $_POST['id'];
		$name = $_POST['name']; 
		$category = $_POST['category'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$item_quantity = $_POST['item_quantity'];

		
		$sql = "UPDATE tbl_product SET name = '$name', category = '$category', description = '$description', price = '$price', item_quantity = '$item_quantity'  WHERE id = '$id'";

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

	header('location: ../index.php?view=SHOP_CONTENT');
?>