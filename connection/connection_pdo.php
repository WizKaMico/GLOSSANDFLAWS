<?php
$servername = "localhost";
$username = "root";
$password = "";

// $servername = "sql589.main-hosting.eu";
// $username = "u659776478_gloss";
// $password = "@Light101213";
// "localhost","u659776478_gloss","@Light101213","u659776478_gloss"

// $conn = mysqli_connect("localhost","root","","flaws");
try {
  $con = new PDO("mysql:host=$servername;dbname=flaws", $username, $password);
  // set the PDO error mode to exception
  $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  // echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>