	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" method="POST" action="index.php?view=<?php echo 'ADDORDER'; ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl">
						<div class="wrap-table-shopping-cart">
							<table class="table-shopping-cart">
								<tr class="table_head">
									<th class="column-1">Product</th>
									<th class="column-2"></th>
									<th class="column-3">Price</th>
									<th class="column-4">Quantity</th>
									<th class="column-5">Total</th>
								</tr>
								<?php foreach ($cartItem as $item) { ?>	
								<tr class="table_row">
									<td class="column-1">
										<div class="how-itemcart1">
											<img src="../includes/<?php echo $item["image"];  ?>" alt="IMG">
										</div>
									</td>
									<?php $total = $item['quantity'] * $item['price']; ?>
									<td class="column-2"><?php echo $item["name"]; ?></td>
									<td class="column-3"><?php echo "₱".$item["price"]; ?></td>
									<td class="column-4"><?php echo $item["quantity"]; ?></td>
									<td class="column-5"><?php echo "₱".$total; ?></td>
								</tr>
							<?php } ?>

						
							</table>
						</div>

						<div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							
						</div>
					</div>
				</div>

				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>

						<div class="flex-w flex-t bor12 p-t-15 p-b-30">
							<div class="size-208 w-full-ssm">
								<span class="stext-110 cl2">
									Shipping:
								</span>
							</div>

							<div class="size-209 p-r-18 p-r-0-sm w-full-ssm">
								<p class="stext-111 cl6 p-t-2">
									There are no shipping methods available. Please double check your address, or contact us if you need any help.
								</p>
								
								<div class="p-t-15">
								

								<div class="bor8 bg0 m-b-12">
									<input type="text" class="stext-111 cl8 plh3 size-111 p-lr-15" name="name" id="name" PlaceHolder="Customer Name" required>
								</div>	
								<div class="bor8 bg0 m-b-12">	
								    <select name="payment_type" class="stext-111 cl8 plh3 size-111 p-lr-15" required="">
								    	<option>--CHOOSE PAYMENT TYPE--</option>
								    	<option value="PICKUP">PICKUP</option>
									</select>
								</div>	

								
							
										
								</div>
							</div>
						</div>

						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
									 ₱ <?php echo $item_price; ?>
								</span>
							</div>
						</div>

						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" name="proceed_payment">
							Proceed to Checkout
						</button>

							<a href="index.php?view=<?php echo 'HOME'; ?>" class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer" style="width:100%; margin-top:30px;">
							Continue Shopping
						</a>
					</div>
				</div>
			</div>
		</div>
	</form>
		
	