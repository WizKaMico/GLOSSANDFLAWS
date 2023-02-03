<?php
   session_start();
   include('../connection/connection.php'); 
	if (isset($_POST['login']))
		{
			$email = mysqli_real_escape_string($conn, $_POST['email']);
			$password = mysqli_real_escape_string($conn, md5($_POST['password']));
			
			$code = mysqli_real_escape_string($conn, $_POST['code']);
 
			$query 		= mysqli_query($conn, "SELECT * FROM patient WHERE email='$email' AND password = '$password' AND status = 'VALID'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
       
			if ($num_row > 0) 
				{			
				
				  $_SESSION['user_id']=$row['user_id'];
					header('location:../PATIENT/index.php?dt=');
 
				}
			else
				{
					if(!empty($code)){
					header('location:../index.php?view='.$code.'&response=SUCESS&login=FAILED#register');
				   }else{
				   header('location:../index.php?view=LOGIN#login');	
				   } 
				}
		}
  ?>