<?php 
include('../connection/connection.php');
include('../connection/admin_session.php'); 
 
$result=mysqli_query($conn, "SELECT * from users where user_id='$session_admin'")or die('Error In Session');
$crow=mysqli_fetch_array($result);
 
$check=mysqli_query($conn, "SELECT *, SUM(total) as amount FROM `purchase`")or die('Error In Session');
$store_income=mysqli_fetch_array($check);

$services=mysqli_query($conn, "SELECT *,SUM(services.service_price_range) as total FROM `appointment` LEFT JOIN services ON appointment.service_id = services.service_id WHERE appointment.status = 'PAID'")or die('Error In Session');
$s_row=mysqli_fetch_array($services);
 
 ?>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
       <link rel="stylesheet" href="assets/vendors/simple-datatables/style.css">

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>


     <script>
                                $(document).ready(function(){
                                    $('#purpose').on('change', function() {
                                      if ( this.value == '1')
                                      //.....................^.......
                                      {
                                          $("#check_0").hide();
                                          $("#check_1").show();
                                          $("#check_2").hide();
                                          $("#check_3").hide();
                                          $("#check_4").hide();
                                      }
                                      else  if ( this.value == '2')
                                      {
                                          $("#check_0").hide();
                                          $("#check_1").hide();
                                          $("#check_2").show();
                                          $("#check_3").hide();
                                          $("#check_4").hide();
                                      }
                                      else  if ( this.value == '3')
                                      {
                                          $("#check_0").hide();
                                          $("#check_1").hide();
                                          $("#check_2").hide();
                                          $("#check_3").show();
                                          $("#check_4").hide();
                                      }
                                      else  if ( this.value == '4')
                                      {
                                          $("#check_0").hide();
                                          $("#check_1").hide();
                                          $("#check_2").hide();
                                          $("#check_3").hide();
                                          $("#check_4").show();
                                      }
                                       else  
                                      {
                                          $("#check_0").show();
                                          $("#check_1").hide();
                                          $("#check_2").hide();
                                          $("#check_3").hide();
                                          $("#check_4").hide();
                                      }
                                    });
                                });
                                </script>


                                    <script>
                                $(document).ready(function(){
                                    $('#track').on('change', function() {
                                      if ( this.value == '5')
                                      //.....................^.......
                                      {
                                          $("#check_5").show();
                                          $("#check_6").hide();
                                          $("#check_7").hide();
                                          $("#check_8").hide();
                                         
                                      }
                                      else  if ( this.value == '6')
                                      {
                                          $("#check_5").hide();
                                          $("#check_6").show();
                                          $("#check_7").hide();
                                          $("#check_8").hide();
                                         
                                      }
                                      else  if ( this.value == '7')
                                      {
                                          $("#check_5").hide();
                                          $("#check_6").hide();
                                          $("#check_7").show();
                                          $("#check_8").hide();
                                       
                                      }
                                    
                                       else  
                                      {
                                          $("#check_5").hide();
                                          $("#check_6").hide();
                                          $("#check_7").hide();
                                          $("#check_8").show();
                                        
                                      }
                                    });
                                });
                                </script> 

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
                <?php if($_GET['view'] == null){ ?>
                <li class="active">
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php } else { ?>
                <li>
                    <a href="index.php">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <?php } ?>
                
                <?php if(!empty($_GET['view'] == 'LIST')){ ?>
                 <li  class="active">
                    <a href="index.php?view=<?php echo 'LIST'; ?>">
                        <i class="pe-7s-graph"></i>
                        <p>List Of Schedules</p>
                    </a>
                </li>
                <?php } else { ?>
                  
                  <li >
                    <a href="index.php?view=<?php echo 'LIST'; ?>">
                        <i class="pe-7s-graph"></i>
                        <p>List Of Schedules</p>
                    </a>
                </li>
                
                
                <?php } ?>
                
                <?php if(!empty($_GET['view'] == 'SHOP')){ ?>
                 <li class="active">
                    <a href="index.php?view=<?php echo 'SHOP'; ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Shop</p>
                    </a>
                </li>
                
                <?php }else{ ?>
                
                <li >
                    <a href="index.php?view=<?php echo 'SHOP'; ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Shop</p>
                    </a>
                </li>
                
                <?php } ?>

                  <?php if(!empty($_GET['view'] == 'SHOP_CONTENT')){ ?>
                 <li class="active">
                    <a href="index.php?view=<?php echo 'SHOP_CONTENT'; ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Shop Content</p>
                    </a>
                </li>
                
                <?php }else{ ?>
                
                <li >
                    <a href="index.php?view=<?php echo 'SHOP_CONTENT'; ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Shop Content</p>
                    </a>
                </li>
                
                <?php } ?>

              <?php if(!empty($_GET['view'] == 'PRODUCT_ARCHIVE')){ ?>
                 <li class="active">
                    <a href="index.php?view=<?php echo 'PRODUCT_ARCHIVE'; ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Archive Product</p>
                    </a>
                </li>
                
                <?php }else{ ?>
                
                <li >
                    <a href="index.php?view=<?php echo 'PRODUCT_ARCHIVE'; ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Archive Product</p>
                    </a>
                </li>
                
                <?php } ?>
                
                <?php if(!empty($_GET['view'] == 'SERVICES')){ ?>
                <li class="active">
                    <a href="index.php?view=<?php echo 'SERVICES'; ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Services</p>
                    </a>
                </li>
                <?php }else{ ?>
                <li >
                    <a href="index.php?view=<?php echo 'SERVICES'; ?>">
                        <i class="pe-7s-graph"></i>
                        <p>Services</p>
                    </a>
                </li>
                <?php } ?>
              
                
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

    <?php if(empty($_GET['view'])){ ?>
        <div class="content">
            <div class="container-fluid">
                 <div class="row">
                     <div class="col-md-4">
                        <div class="card">
                             <div class="header">
                                 <?php 
                                 $overall = $store_income['amount'] + $s_row['total'];
                                 ?>
                                <h4 class="title">TOTAL INCOME | ₱ <?php echo number_format($overall, 2); ?></h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>
                            </div>
                            <div class="content">
                               

                             </div>
                           </div>
                         </div> 
                     
                    <div class="col-md-4">
                        <div class="card">
                             <div class="header">
                                <h4 class="title">STORE INCOME | ₱ <?php echo number_format($store_income['amount'], 2); ?></h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>
                            </div>
                            <div class="content">
                               

                             </div>
                           </div>
                         </div> 
                         
                    <div class="col-md-4">
                        <div class="card">
                             <div class="header">
                                <h4 class="title">SERVICES INCOME | ₱ <?php echo number_format($s_row['total'], 2); ?></h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>
                            </div>
                            <div class="content">
                              

                             </div>
                           </div>
                         </div>
              
                </div>
                 <div class="row">
                     <div class="col-md-4">
                        <div class="card">
                             <div class="header">
                                 <?php 
                                 $overall = $store_income['amount'] + $s_row['total'];
                                 ?>
                                <h4 class="title">PIE CHART (DATE AND TOTAL PURCHASE) | STORE</h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>
                            </div>
                            <div class="content">
                                <select id='purpose' class="form-control">
                                <option value="0">Daily</option>
                                <option value="1">Weekly</option>
                                <option value="2">Monthly</option>
                                <option value="4">Annually</option>
                                </select>

                              


                                <div style='display:none;' id='check_0'><br/>&nbsp;
                                  <iframe src="charts/pie_daily.php" style="width:100%; height:300px; border:none;"></iframe>    
                                </div>
                                <div style='display:none;' id='check_1'><br/>&nbsp;
                                   <iframe src="charts/pie_weekly.php" style="width:100%; height:300px; border:none;"></iframe> 
                                </div>
                                <div style='display:none;' id='check_2'><br/>&nbsp;
                                  <iframe src="charts/pie_monthly.php" style="width:100%; height:300px; border:none;"></iframe> 
                                </div>

                                 <div style='display:none;' id='check_4'><br/>&nbsp;
                                   <iframe src="charts/pie_yearly.php" style="width:100%; height:300px; border:none;"></iframe> 
                                </div>
                             

                             </div>
                           </div>
                         </div> 
                         
                            <div class="col-md-4">
                        <div class="card">
                             <div class="header">
                                 <?php 
                                 $overall = $store_income['amount'] + $s_row['total'];
                                 ?>
                                <h4 class="title">PIE CHART (DATE AND AMOUNT PURCHASE) | STORE</h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>
                            </div>
                            <div class="content">

                                <select id='track' class="form-control">
                                <option value="5">Daily</option>
                                <option value="6">Weekly</option>
                                <option value="7">Monthly</option>
                                <option value="8">Annually</option>
                                </select>

                              


                                <div style='display:none;' id='check_5'><br/>&nbsp;
                                  <iframe src="charts/pie2_daily.php" style="width:100%; height:300px; border:none;"></iframe>    
                                </div>
                                <div style='display:none;' id='check_6'><br/>&nbsp;
                                   <iframe src="charts/pie2_weekly.php" style="width:100%; height:300px; border:none;"></iframe> 
                                </div>
                                <div style='display:none;' id='check_7'><br/>&nbsp;
                                  <iframe src="charts/pie2_monthly.php" style="width:100%; height:300px; border:none;"></iframe> 
                                </div>

                                 <div style='display:none;' id='check_8'><br/>&nbsp;
                                   <iframe src="charts/pie2_yearly.php" style="width:100%; height:300px; border:none;"></iframe> 
                                </div>    


                             

                             </div>
                           </div>
                         </div> 
                     
                    <div class="col-md-4">
                        <div class="card">
                             <div class="header">
                                <h4 class="title">BAR CHART (SERVICES APPOINTMENT STATS)</h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>
                            </div>
                            <div class="content">
                                <iframe src="charts/bar.php" style="width:100%; height:330px; border:none;"></iframe>

                             </div>
                           </div>
                         </div> 
                         
        
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                                <iframe src="frame/calendar/" style="width:100%; height:700px; border:none;"></iframe>

                             </div>
                           </div>
                         </div>       
              
                </div>
            </div>
        </div>
    <?php } else if($_GET['view'] == 'LIST'){ ?>
           <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">WELCOME! <?php echo strtoupper($crow['name']); ?></h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>
                            </div>
                            <div class="content">
                                <iframe src="frame/" style="width:100%; height:700px; border:none;"></iframe>

                             </div>
                           </div>
                         </div>       
              
                </div>
            </div>
        </div>

    <?php } else if($_GET['view'] == 'SHOP'){ ?>
           <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">WELCOME! <?php echo strtoupper($crow['name']); ?></h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>
                            </div>
                            <div class="content">
                                <iframe src="SALES/?user_id=<?PHP echo $crow['user_id']; ?>" style="width:100%; height:600px; border:none;"></iframe>

                             </div>
                           </div>
                         </div>       
              
                </div>
            </div>
        </div>


         <?php } else if($_GET['view'] == 'SHOP_CONTENT'){ ?>
           <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">WELCOME! <?php echo strtoupper($crow['name']); ?></h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>

                                <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                        data-target="#default">
                                        ADD PRODUCT
                                    </button>

                                      <button type="button" class="btn btn-outline-primary" data-toggle="modal"
                                        data-target="#category">
                                        ADD CATEGORY
                                    </button>


                                        <!--add product -->
                                    <div class="modal fade text-left" id="default" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">ADD AN PRODUCT</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="includes/add_product.php" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="name" placeholder="Product Name" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <select class="form-control" name="category" required>
                                                                          <?php
                                                                                    $queries = mysqli_query($conn, "SELECT * FROM `tbl_category`") or die(mysqli_error());
                                                                                    while($categ_fetch = mysqli_fetch_array($queries)){
                                                                            ?>
                                                                        <option value="<?php echo $categ_fetch['category']; ?>"><?php echo str_replace("_", " ",$categ_fetch['category']); ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="code" value="<?php echo 'GLOSS'; echo '-'; echo rand(6666,9999); ?>" required="" readonly="">
                                                                </div>
                                                               
                                                                 <div class="form-group">
                                                                    <textarea name="description" class="form-control" required="" rows="5" cols="10" placeholder="Enter Description"></textarea>
                                                                </div>
                                                               
                                                                <div class="form-group">
                                                                    <input type="file" 
                                                                        class="form-control" name="photo" required="">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="number" 
                                                                        class="form-control" name="price" placeholder="Enter Price" required="">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="number" 
                                                                        class="form-control" name="item_quantity" placeholder="Enter Quantity" required="">
                                                                </div>
                                                          
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">ADD PRODUCT</button>
                                                                </div>
                                                            </div>
                                                            
                                                        </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                           <!--add category -->
                                    <div class="modal fade text-left" id="category" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">ADD CATEGORY</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="includes/add_category.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="category_name" placeholder="Category Name" required>
                                                                </div>
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">ADD CATEGORY</button>
                                                                </div>
                                                            </div>
                                                            
                                                        </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </div>
                            <div class="content">
                                                 <div class="card-body">
                                    <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>PRODUCT NAME</th>
                                                <th>CATEGORY</th>
                                                <th>CODE</th>
                                                <th>PRICE</th>
                                                <th>STOCK QUANTITY</th>
                                                <th>REMAINING</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT * FROM `tbl_product`") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                                        $id = $fetch['id'];    
                                                        $product_qty=mysqli_query($conn, "SELECT *,SUM(tbl_order_item.quantity) as total FROM `tbl_order_item` LEFT JOIN tbl_order ON tbl_order_item.order_id =  tbl_order.id WHERE tbl_order_item.product_id ='$id' AND tbl_order.order_status != 'CANCEL'");
                                                        $p_quantity=mysqli_fetch_array($product_qty);

                                                        $remaining_stock =   $fetch['item_quantity'] - $p_quantity['total'];
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['name']; ?></td>
                                                <td><?php echo $fetch['category']; ?></td>
                                                <td><?php echo $fetch['code']; ?></td>
                                                <td><?php echo $fetch['price']; ?></td>
                                                <td><?php echo $fetch['item_quantity']; ?></td>
                                                 <td><?php echo $remaining_stock; ?></td>
                                                 <?php if($remaining_stock > 11 || $remaining_stock == 11){ ?>
                                                 <td>AVAILABLE</td>
                                                 <?php } else if($remaining_stock > 5 && $remaining_stock < 10){ ?>  
                                                 <td>RESTOCK NOW</td>
                                                 <?php } else if($remaining_stock < 0 || $remaining_stock == 0){ ?>  
                                                 <td>OUT OF STOCK</td>
                                                 <?php } else { ?>
                                                 <td>CRITICAL TO LOW</td>
                                                 <?php } ?>       

                                                <td>  <button type="button" class="btn btn-outline-primary block" data-toggle="modal"
                                                    data-target="#default<?php echo $fetch['id']; ?>">
                                                    EDIT
                                                </button>

                                                <button type="button" class="btn btn-outline-primary block" data-toggle="modal"
                                                    data-target="#delete<?php echo $fetch['id']; ?>">
                                                    REMOVE
                                                </button>
                                            </td>

                                    <div class="modal fade text-left" id="default<?php echo $fetch['id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">EDIT PRODUCT</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="includes/update_product.php" method="POST" enctype="multipart/form-data">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="name" placeholder="Product Name" value="<?php echo $fetch['name']; ?>" required>
                                                                        <input type="hidden" 
                                                                        class="form-control" name="id" placeholder="Product Name" value="<?php echo $fetch['id']; ?>" required>
                                                                </div>

                                                                <div class="form-group">
                                                                    <select class="form-control" name="category" required>
                                                                           <option value="<?php echo $fetch['category']; ?>"><?php echo str_replace("_", " ",$fetch['category']); ?> (CURRENT)</option>
                                                                          <?php
                                                                                    $quer = mysqli_query($conn, "SELECT * FROM `tbl_category`") or die(mysqli_error());
                                                                                    while($categx_fetch = mysqli_fetch_array($quer)){
                                                                            ?>
                                                                        <option value="<?php echo $categx_fetch['category']; ?>"><?php echo str_replace("_", " ",$categx_fetch['category']); ?></option>
                                                                    <?php } ?>
                                                                    </select>
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="text" 
                                                                        class="form-control" name="code" value="<?php echo $fetch['code']; ?>" required="" readonly="">
                                                                </div>
                                                               
                                                                 <div class="form-group">
                                                                    <textarea name="description" class="form-control" required="" rows="5" cols="10" placeholder="Enter Description"><?php echo $fetch['description']; ?></textarea>
                                                                </div>
                                                               
                                                               
                                                                <div class="form-group">
                                                                    <input type="number" 
                                                                        class="form-control" name="price" placeholder="Enter Price" value="<?php echo $fetch['price']; ?>" required="">
                                                                </div>

                                                                <div class="form-group">
                                                                    <input type="number" 
                                                                        class="form-control" name="item_quantity" placeholder="Enter Quantity" value="<?php echo $fetch['item_quantity']; ?>" required="">
                                                                </div>
                                                          
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">UPDATE PRODUCT</button>
                                                                </div>
                                                            </div>
                                                            
                                                        </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                       <div class="modal fade text-left" id="delete<?php echo $fetch['id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">REMOVE PRODUCT</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="includes/delete_product.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                  
                                                                        <input type="hidden" 
                                                                        class="form-control" name="id" value="<?php echo $fetch['id']; ?>" required>
                                                                
                                                                </div>

                                                              
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">REMOVE ITEM</button>
                                                                </div>
                                                            </div>
                                                            
                                                        </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                               
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>

                             </div>
                           </div>
                         </div>       
              
                </div>
            </div>
        </div>






         <?php } else if($_GET['view'] == 'PRODUCT_ARCHIVE'){ ?>
           <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">WELCOME! <?php echo strtoupper($crow['name']); ?></h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>

    

                            </div>
                            <div class="content">
                                <div class="card-body">
                                    <table class="table table-striped" id="table1">
                                        <thead>
                                            <tr>
                                                <th>PRODUCT NAME</th>
                                                <th>CATEGORY</th>
                                                <th>CODE</th>
                                                <th>PRICE</th>
                                                <th>STOCK QUANTITY</th>
                                                <th>REMAINING</th>
                                                <th>STATUS</th>
                                                <th>ACTION</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                    date_default_timezone_set('Asia/Manila'); 
                                                    $query = mysqli_query($conn, "SELECT * FROM `tbl_archive`") or die(mysqli_error());
                                                    while($fetch = mysqli_fetch_array($query)){
                                                        $id = $fetch['id'];    
                                                        $product_qty=mysqli_query($conn, "SELECT *,SUM(tbl_order_item.quantity) as total FROM `tbl_order_item` LEFT JOIN tbl_order ON tbl_order_item.order_id =  tbl_order.id WHERE tbl_order_item.product_id ='$id' AND tbl_order.order_status != 'CANCEL'");
                                                        $p_quantity=mysqli_fetch_array($product_qty);

                                                        $remaining_stock =   $fetch['item_quantity'] - $p_quantity['total'];
                                            ?>
                                            <tr>
                                                <td><?php echo $fetch['name']; ?></td>
                                                <td><?php echo $fetch['category']; ?></td>
                                                <td><?php echo $fetch['code']; ?></td>
                                                <td><?php echo $fetch['price']; ?></td>
                                                <td><?php echo $fetch['item_quantity']; ?></td>
                                                 <td><?php echo $remaining_stock; ?></td>
                                                 <?php if($remaining_stock > 11 || $remaining_stock == 11){ ?>
                                                 <td>AVAILABLE</td>
                                                 <?php } else if($remaining_stock > 5 && $remaining_stock < 10){ ?>  
                                                 <td>RESTOCK NOW</td>
                                                 <?php } else if($remaining_stock < 0 || $remaining_stock == 0){ ?>  
                                                 <td>OUT OF STOCK</td>
                                                 <?php } else { ?>
                                                 <td>CRITICAL TO LOW</td>
                                                 <?php } ?>       

                                                <td> 

                                                <button type="button" class="btn btn-outline-primary block" data-toggle="modal"
                                                    data-target="#delete<?php echo $fetch['id']; ?>">
                                                    RETURN PRODUCT
                                                </button>
                                            </td>

                            

                                       <div class="modal fade text-left" id="delete<?php echo $fetch['id']; ?>" tabindex="-1" role="dialog"
                                        aria-labelledby="myModalLabel1" aria-hidden="true" data-backdrop="false">
                                        <div class="modal-dialog modal-dialog-scrollable" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="myModalLabel1">RETURN PRODUCT</h5>
                                                    <button type="button" class="close rounded-pill"
                                                        data-dismiss="modal" aria-label="Close">
                                                        <i data-feather="x"></i>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form action="includes/return_product.php" method="POST">
                                                            <div class="modal-body">
                                                               
                                                                <div class="form-group">
                                                                  
                                                                        <input type="hidden" 
                                                                        class="form-control" name="id" value="<?php echo $fetch['id']; ?>" required>
                                                                
                                                                </div>

                                                              
                                                            
                                                                <div class="form-group">
                                                                    <button type="submit" name="submit" class="btn btn-primary" style="width:100%;">RETURN ITEM</button>
                                                                </div>
                                                            </div>
                                                            
                                                        </form>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn" data-dismiss="modal">
                                                        <i class="bx bx-x d-block d-sm-none"></i>
                                                        <span class="d-none d-sm-block">Close</span>
                                                    </button>
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                               
                                            </tr>
                                            <?php } ?>
                                            
                                        </tbody>
                                    </table>
                                    </div>

                             </div>
                           </div>
                         </div>       
              
                </div>
            </div>
        </div>
        


    <?php } else if($_GET['view'] == 'SERVICES'){ ?>
           <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">

                            <div class="header">
                                <h4 class="title">WELCOME! <?php echo strtoupper($crow['name']); ?></h4>
                                <p class="category"><?php echo date('F d, Y h:i:s');  ?></p>
                            </div>
                            <div class="content">
                                <iframe src="frame/services.php" style="width:100%; height:600px; border:none;"></iframe>

                             </div>
                           </div>
                         </div>       
              
                </div>
            </div>
        </div>
     


   <?php }else{ ?>
   



   <?php } ?>     

       
       


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

        <script src="assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
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
