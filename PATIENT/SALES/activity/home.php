
	<!-- Product -->
	<section class="bg0 p-t-23 p-b-140">
		<div class="container">
			<div class="p-b-10" style="margin-top:100px;">
				<h3 class="ltext-103 cl5">
					Product Overview
				</h3>
			</div>

			<div class="flex-w flex-sb-m p-b-52">
				<div class="flex-w flex-l-m filter-tope-group m-tb-10">
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
						ALL PRODUCTS
					</button>
					  <?php
                            $sql = "SELECT * FROM `tbl_product` GROUP BY category";
               
                            //use for MySQLi-OOP
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                        ?>  
					<button class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5" data-filter=".<?php echo $row['category']; ?>">
						<?php echo str_replace("_", " ", $row['category']); ?>
					</button>
				<?php } ?>
				</div>		
			</div>

			<div class="row isotope-grid">
				    <?php
			    $query = "SELECT * FROM tbl_product";
			    $product_array = $shoppingCart->getAllProduct($query);
			    if (! empty($product_array)) {
			        foreach ($product_array as $key => $value) {

			        	$id = $product_array[$key]["id"];

			        	$product_qty=mysqli_query($conn, "SELECT *,SUM(tbl_order_item.quantity) as total FROM `tbl_order_item` LEFT JOIN tbl_order ON tbl_order_item.order_id =  tbl_order.id WHERE tbl_order_item.product_id ='$id' AND tbl_order.order_status != 'CANCEL'");
                        $p_quantity=mysqli_fetch_array($product_qty);

                        $remaining_stock =   $product_array[$key]["item_quantity"] - $p_quantity['total'];
			     ?>

		<?php if($remaining_stock > 0){ ?>	     
	   <form method="post" action="index.php?action=add&code=<?php echo $product_array[$key]["code"]; ?>&view=<?php echo 'HOME'; ?>">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $product_array[$key]["category"]; ?>">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="../../ADMIN/includes/<?php echo $product_array[$key]["image"];  ?>" alt="IMG-PRODUCT" style="width:50%; height:200px;">
							<input type="hidden" name="quantity" value="1" max="<?php echo $remaining_stock; ?>" size="2" class="input-cart-quantity" />
							
						
							<a href="index.php?view=<?php ECHO 'SPECIFIC'; ?>&code=<?php echo $product_array[$key]["code"]; ?>&user_id=<?php echo $user_id; ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
								ADD TO CART
								</a>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="index.php?view=<?php ECHO 'SPECIFIC'; ?>&code=<?php echo $product_array[$key]["code"]; ?>&user_id=<?php echo $user_id; ?>" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								 <?php echo $product_array[$key]["name"]; ?>
								</a>

								<span class="stext-105 cl3">
									<?php echo "₱".$product_array[$key]["price"]; ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							
							</div>
						</div>
					</div>
				</div>
			</form>	
			<?php }else{ ?>
			<form method="post" action="index.php?view=<?php echo 'HOME'; ?>">
				<div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item <?php echo $product_array[$key]["category"]; ?>">
					<!-- Block2 -->
					<div class="block2">
						<div class="block2-pic hov-img0">
							<img src="../../ADMIN/includes/<?php echo $product_array[$key]["image"];  ?>" alt="IMG-PRODUCT" style="width:50%; height:200px;">
							<input type="hidden" name="quantity" value="1" size="2" class="input-cart-quantity" />
							
							<button  class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">OUT OF STOCK</button>
						</div>

						<div class="block2-txt flex-w flex-t p-t-14">
							<div class="block2-txt-child1 flex-col-l ">
								<a href="#" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
								 <?php echo $product_array[$key]["name"]; ?>
								</a>

								<span class="stext-105 cl3">
									<?php echo "₱".$product_array[$key]["price"]; ?>
								</span>
							</div>

							<div class="block2-txt-child2 flex-r p-t-3">
							
							</div>
						</div>
					</div>
				</div>
			</form>	
			<?php } ?>	



				<?php
			        }
			    }
			   ?>
			</div>

		</div>
	</section>