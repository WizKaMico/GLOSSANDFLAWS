<?php
  session_start();
  include '../connection/connection.php';

  if(isset($_POST['submit'])){
  
 $patient_id = $_POST['patient_id']; 
 $appoint_date = $_POST['appoint_date'];
 $appoint_time = $_POST['appoint_time'];
 $service_id = $_POST['service_id']; 
 $email = $_POST['email'];
 $status = 'UNPAID';
$start = date("Y-m-d", strtotime($appoint_date));
$end = date("Y-m-d", strtotime($appoint_date));
$title = 'PATIENT-'.$email.'';


    
    $sql = "INSERT INTO appointment (patient_id, appoint_date, appoint_time, service_id, email, status) VALUES ('$patient_id', '$appoint_date', '$appoint_time', '$service_id', '$email', '$status')";

       $sql1 = "INSERT INTO tbl_events (title, start, end) VALUES ('$title', '$start', '$end')";


    //use for MySQLi OOP
    if($conn->query($sql) && $conn->query($sql1)){
      $_SESSION['success'] = 'USER ADDED SUCCESFULLY';
    }
    ///////////////

    //use for MySQLi Procedural
    // if(mysqli_query($conn, $sql)){
    //  $_SESSION['success'] = 'Member added successfully';
    // }
    //////////////
    
    else{
      $_SESSION['error'] = 'Something went wrong while adding';
    }
  }
  else{
    $_SESSION['error'] = 'Fill up add form first';
  }

  header('location: ../PATIENT/index.php?dt=');
?>