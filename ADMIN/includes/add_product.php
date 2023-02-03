<?php
	include '../../connection/connection.php';
	if(ISSET($_POST['submit'])){
		$image_name = $_FILES['photo']['name'];
		$image_temp = $_FILES['photo']['tmp_name'];
		$cname  = $_POST['name'];
		$category = $_POST['category'];
		$code = $_POST['code'];
		$description = $_POST['description'];
		$price = $_POST['price'];
		$item_quantity = $_POST['item_quantity'];
		$exp = explode(".", $image_name);
		$end = end($exp);
		$name = time().".".$end;
		if(!is_dir("./upload"))
			mkdir("upload");
		$path = "upload/".$name;
		$allowed_ext = array("gif", "jpg", "jpeg", "png");
		if(in_array($end, $allowed_ext)){
			if(move_uploaded_file($image_temp, $path)){
				mysqli_query($conn, "INSERT INTO `tbl_product` VALUES('', '$cname', '$category', '$code', '$description',  '$path', '$price', '$item_quantity')") or die(mysqli_error());
				echo "<script>alert('User account saved!')</script>";
				header("location: ../index.php?view=SHOP_CONTENT");
			}	
		}else{
			echo "<script>alert('Image only')</script>";
		}
	}
?>