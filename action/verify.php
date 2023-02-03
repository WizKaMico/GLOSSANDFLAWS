<?php
   include('../connection/connection.php'); 
	if (isset($_POST['verify']))
		{
			$ecode = mysqli_real_escape_string($conn, $_POST['ecode']);
 
			$query 		= mysqli_query($conn, "SELECT * FROM patient WHERE code='$ecode'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
 
			if ($num_row > 0) 
				{			
					$code = $row['code'];
					mysqli_query($conn,"UPDATE patient SET status = 'VALID' WHERE code = '$code'");			

					header('location:../index.php?view='.$row['code'].'&response=SUCESS#register');
 
				}
			else
				{
					header('location:../index.php?view='.$ecode.'&response=ERR#register');
				}
		}
  ?>