<?php $code = $_GET['code']; ?>

<?php   

  $coderes=mysqli_query($conn, "select * from tbl_product where code='$code'")or die('Error In Session');
$crow=mysqli_fetch_array($coderes);


			      $id = $crow["id"];

			       $product_qty=mysqli_query($conn, "SELECT *,SUM(tbl_order_item.quantity) as total FROM `tbl_order_item` LEFT JOIN tbl_order ON tbl_order_item.order_id =  tbl_order.id WHERE tbl_order_item.product_id ='$id' AND tbl_order.order_status != 'CANCEL'");
                        $p_quantity=mysqli_fetch_array($product_qty);

              $remaining_stock =   $crow["item_quantity"] - $p_quantity['total'];

?>


<!-- Product Detail -->
	<section class="sec-product-detail bg0 p-t-65 p-b-60">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-lg-7 p-b-30">
					<div class="p-l-25 p-r-30 p-lr-0-lg">
						<div class="wrap-slick3 flex-sb flex-w">
							<div class="wrap-slick3-dots"></div>
							<div class="wrap-slick3-arrows flex-sb-m flex-w"></div>

							<div class="slick3 gallery-lb">
								<div class="item-slick3" data-thumb="../includes/<?php echo $crow["image"]; ?>">
									<div class="wrap-pic-w pos-relative">
										<img src="../includes/<?php echo $crow["image"]; ?>" alt="IMG-PRODUCT">

										<a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="../includes/<?php echo $crow["image"]; ?>">
											<i class="fa fa-expand"></i>
										</a>
									</div>
								</div>

							

			
							</div>
						</div>
					</div>
				</div>
					
				<div class="col-md-6 col-lg-5 p-b-30">
					<div class="p-r-50 p-t-5 p-lr-0-lg">
						<h4 class="mtext-105 cl2 js-name-detail p-b-14">
							<?php echo $crow['name']; ?>
						</h4>

						<span class="mtext-106 cl2">
							₱ <?php echo $crow['price']; ?>
						</span>
						
						<!--  -->
						<div class="p-t-33">
					<!-- 		<div class="flex-w flex-r-m p-b-10">
								<div class="size-203 flex-c-m respon6">
									Size
								</div>

								<div class="size-204 respon6-next">
									<div class="rs1-select2 bor8 bg0">
										<select class="js-select2" name="time">
											<option>Choose an option</option>
											<option>Size S</option>
											<option>Size M</option>
											<option>Size L</option>
											<option>Size XL</option>
										</select>
										<div class="dropDownSelect2"></div>
									</div>
								</div>
							</div> -->

					
						 <form method="post" action="index.php?action=add&code=<?php echo $crow['code']; ?>&view=<?php echo 'SPECIFIC'; ?>">
							<div class="flex-w flex-r-m p-b-10">
								<div class="size-204 flex-w flex-m respon6-next">
									<div class="wrap-num-product flex-w m-r-20 m-tb-10">
										<div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-minus"></i>
										</div>

										<input class="mtext-104 cl3 txt-center num-product" type="number"  name="quantity" value="1" max="<?php echo $remaining_stock; ?>">

										<div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
											<i class="fs-16 zmdi zmdi-plus"></i>
										</div>
									</div>

									<button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail">
										Add to cart
									</button>
								</div>
							</div>	
						</form>	
						</div>

						<!--  -->
			
					</div>
				</div>
			</div>

			<div class="bor10 m-t-50 p-t-43 p-b-40">
				<!-- Tab01 -->
				<div class="tab01">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs" role="tablist">
						<li class="nav-item p-b-10">
							<a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
						</li>

					</ul>

					<!-- Tab panes -->
					<div class="tab-content p-t-43">
						<!-- - -->
						<div class="tab-pane fade show active" id="description" role="tabpanel">
							<div class="how-pos2 p-lr-15-md">
								<p class="stext-102 cl6">
								<?php echo $crow['description']; ?>
								</p>
							</div>
						</div>

	

						<!-- - -->
					</div>
				</div>
			</div>
		</div>

		<div class="bg6 flex-c-m flex-w size-302 m-t-73 p-tb-15">
			<span class="stext-107 cl6 p-lr-25">
				SKU: <?php echo $crow['code']; ?>
			</span>

			<span class="stext-107 cl6 p-lr-25">
				Categories: 	<?php echo str_replace("_", " ", $crow['category']); ?>
			</span>
		</div>
	</section>