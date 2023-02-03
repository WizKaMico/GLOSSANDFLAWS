<?php
	session_start();
	include '../../connection/connection.php';

	if(isset($_POST['submit'])){
	
		
		$id = $_POST['id'];
       
         $result=mysqli_query($conn, "SELECT * from tbl_product where id='$id'");
         $crow=mysqli_fetch_array($result);

         $name = $crow['name']; 
         $category = $crow['category'];
         $code = $crow['code'];
         $description = $crow['description'];
         $image = $crow['image'];
         $price = $crow['price'];
         $item_quantity = $crow['item_quantity'];

		
		$sql1 = "INSERT INTO tbl_archive (name, category, description, image, price, item_quantity) VALUES ('$name', '$category', '$description', '$image', '$price', '$item_quantity')";
		$sql = "DELETE FROM tbl_product WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql) && $conn->query($sql1)){
			$_SESSION['success'] = ' DELETED SUCCESFULLY';
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