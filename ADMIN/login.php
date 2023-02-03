<?php session_start(); ?>
<?php include('../connection/connection.php'); ?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-color:#124753;">
<div class="form-wrapper" style="background-color:white;">
  
  <form action="#" method="post" style="color:black;">
    <img src="../logo/logo.png">
	
    <div class="form-item">
		<input type="text" name="user" required="required" placeholder="Username" style="color:black;" autofocus required></input>
    </div>
    
    <div class="form-item">
		<input type="password" name="pass" required="required" placeholder="Password" style="color:black;" required></input>
    </div>
    
    <div class="button-panel">
		<input type="submit" class="button" title="Log In" name="login" value="Login" style="background-color:#099688; border-color:#099688;"></input>
    </div>
  </form>
  <?php
	if (isset($_POST['login']))
		{
			$username = mysqli_real_escape_string($conn, $_POST['user']);
			$password = mysqli_real_escape_string($conn, $_POST['pass']);
			
			$query 		= mysqli_query($conn, "SELECT * FROM users WHERE  password='$password' and username='$username'");
			$row		= mysqli_fetch_array($query);
			$num_row 	= mysqli_num_rows($query);
			
			if ($num_row > 0) 
				{			
					$_SESSION['user_id']=$row['user_id'];
					header('location:index.php');
					
				}
			else
				{
					echo 'Invalid Username and Password Combination';
				}
		}
  ?>
</div>

</body>
</html>