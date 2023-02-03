<?php 
include('../connection/connection.php');
include('../connection/session.php'); 
 
$result=mysqli_query($conn, "select * from patient where user_id='$session_id'")or die('Error In Session');
$crow=mysqli_fetch_array($result);

$dt = $_GET['dt'];
$disable_date[]="";

$sql = "SELECT appoint_date FROM appointment GROUP BY appoint_date HAVING COUNT(appoint_date) > 9";
$query = $conn->query($sql);
 

if (is_null($disable_date)) {
    $disable_date='["01-05-2022"]';
}else{
while($row = $query->fetch_assoc()){ 
    $disable_date[] = $row['appoint_date'];
}

}
$disable_date = stripcslashes(json_encode($disable_date));
?>
 
 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>GLOSS AND FLOSS | PATIENT </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
   

</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="azure" data-image="assets/img/sidebar-5.jpg">

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="#" class="simple-text">
                    <!-- <img src="../logo/logo.png"> -->
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="index.php?dt=">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                 <li>
                    <a href="shop.php">
                        <i class="pe-7s-graph"></i>
                        <p>Shop</p>
                    </a>
                </li>
                 <li>
                    <a href="schedule.php">
                        <i class="pe-7s-graph"></i>
                        <p>My Schedule</p>
                    </a>
                </li>
                
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                   
                   
                </div>
                <div class="collapse navbar-collapse">
                     

                    <ul class="nav navbar-nav navbar-right">
                     
                        <li>
                            <a href="logout.php">
                                <p>Log out</p>
                            </a>
                        </li>
						<li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">WELCOME! <?php echo strtoupper($crow['fullname']); ?></h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>
                            </div>
                            <div class="content">
                                <iframe src="frame/calendar/" style="width:100%; height:700px; border:none;"></iframe>

                             </div>
                           </div>
                         </div>       
                    <div class="col-md-6">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">WELCOME! <?php echo strtoupper($crow['fullname']); ?></h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>
                            </div>
                            <div class="content">
                             <form action="../action/proceed.php" method="POST">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>DATE OF APPOINTMENT</label>
                                                <input type="text"  id="datepicker" name="appoint_date" value="<?php echo $dt; ?>" class="form-control" style="background:white;" required>
                                            </div>
                                        </div>

                                        <?php if ($dt!="") { ?>

                                         <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Select Time</label>
                                                <select name="appoint_time" id="seltime" class="form-control" style="background-color:white;">
                                                    <option value="">Select Time</option>
                                                    <?php

                                                  for($h=9; $h<=17; $h++){

                                                    
                                                    for($i=0; $i<60; $i+=60){
                    

                                                               $time = date('h:i A',strtotime($h.':'.$i));
                                                                $sql = "SELECT * FROM appointment WHERE appoint_date='$dt' AND appoint_time='$time'";

                                                                //use for MySQLi-OOP
                                                                $querytime = $conn->query($sql);
                                                                while($rowtime = $querytime->fetch_assoc());
                                                                if ($rowtime['appoint_time']==$time) {
                                                                echo "<option value='$time' hidden>".$time."</option>";
                                                                }else{
                                                                echo "<option value='$time'>".$time."</option>";
                                                                 }
                                                            }
                                                        }


                                                        
                                                    
                                                ?>
                                                </select>
                                            </div>
                                        </div>   


                                         <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Select Service</label>
                                                <select name="service_id" class="form-control">
                                                    <option value="">Select Service</option>
                                                     <?php
                      
                                                                $sql = "SELECT * FROM services";

                                                                //use for MySQLi-OOP
                                                                $query = $conn->query($sql);
                                                                while($row = $query->fetch_assoc()){
                                                        ?>  
                                                         <option value="<?php echo $row['service_id']; ?>"><?php echo $row['service_name']; ?> | CONSULTATION FEE : <?php echo $row['service_price_range']; ?></option>


                                                    <?php } ?>


                                            <?php } ?> 
                                    </div>
                                </div>
                                 <input type="hidden" name="email" value="<?php echo $crow['email'] ?>" required>
                                 <input type="hidden" name="patient_id" value="<?php echo $crow['user_id'] ?>" required>

                                <div class="col-md-12">
                                  <div class="form-group">
                                    <button type="submit" name="submit" class="form-control btn-info btn-fill">PROCEED</button>
                                  </div>
                                 </div>   
                                    <div class="clearfix"></div>
                                </form>

                               
                            </div>
                        </div>
                         
                    </div>   
                </div>



              




          
            </div>


        </div>

       
       


        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    
                </nav>
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">GLOSS & FLOSS</a>
                </p>
            </div>
        </footer>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "WELCOME! <?php echo strtoupper($row['fullname']); ?>"

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

      <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
    <script>
 
       // var unavailableDates = ["9-5-2022", "14-5-2022", "16-5-2022"];

// var unavailableDates = ["","30-5-2022","31-5-2022"];
var unavailableDates = <?php echo $disable_date; ?>;
// alert(<?php echo json_encode($disable_date); ?>);
    function unavailable(date) {
        dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
        if ($.inArray(dmy, unavailableDates) == -1) {
            // return [true, ""];

        var day = date.getDay();
        return [(day != 0 && day != 6)];
        } else {
            return [false, "", "Unavailable"];
        }
    }

    // $(function() {
    //     $("#datepicker").datepicker({
    //         dateFormat: 'dd MM yy',
    //         beforeShowDay: unavailable
    //     });

    //  });
//     $(document).ready(function(){
//         $('#datepicker').datepicker('show');
//      });
// var unavailableDates = ["10-3-2022", "14-3-2022", "15-3-2022"];
// // var unavailableDates = <?php echo json_encode($disable_date); ?>;
// // alert(<?php echo json_encode($disable_date); ?>);

// function disabledays(date) {
//     dmy = date.getDate() + "-" + (date.getMonth() + 1) + "-" + date.getFullYear();
//     if ($.inArray(dmy, unavailableDates) == 0) {
//         return [false, "", "Unavailable"]
//     } else {
//         var day = date.getDay();
//         return [(day != 0 && day != 6)];
//     }

// }

// $('#datepicker').datepicker({
//     beforeShowDay: disabledays

// })
var dateToday = new Date(); 
$(function() {
    $( "#datepicker" ).datepicker({
        dateFormat: 'd-m-yy',
        numberOfMonths: 1,
        minDate: 3, 
        // beforeShowDay: $.datepicker.noWeekends,
        beforeShowDay: unavailable,
        onSelect: function (date, datepicker) {
                    if (date != "") {
                        window.location = 'index.php?dt=' + date;
                        $("#select").show();
                    }
                }
    });
});

  </script>

</html>
