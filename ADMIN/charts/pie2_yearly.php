<?php
	//connection
	include('../../connection/connection.php');
     date_default_timezone_set('Asia/Manila');
    $date = date('Y-m-d');
	$sql = "SELECT CAST(date_purchase AS DATE) as total, SUM(total) as number FROM purchase  GROUP BY YEAR(CAST(date_purchase AS DATE));";
	$query = $conn->query($sql);
 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
<!-- this is where we show our chart -->
<div id="piechart" style="width: 100%; height: auto;"></div>
 
<!-- Load our Scripts -->
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
<script type="text/javascript">  
	google.charts.load('current', {'packages':['corechart']});  
	google.charts.setOnLoadCallback(drawChart);  
	function drawChart(){  
    var data = google.visualization.arrayToDataTable([  
              	['Date', 'Purchase Count'],  
              	<?php  
	              	while($row = $query->fetch_assoc()){  
	               		echo "['".$row["total"]."', ".$row["number"]."],";  
	              	}  
              	?>  
         	]);  
    var options = {  
          		title: '',  
          		//is3D:true,  
          		pieHole: 0.4  
         	};  
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
    chart.draw(data, options);  
}  
</script>
</body>
</html>