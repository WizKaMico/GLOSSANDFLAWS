	<!-- Shoping Cart -->
	<form class="bg0 p-t-75 p-b-85" method="index.php?view=<?php echo 'ADDORDER'; ?>">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-xl-7 m-lr-auto m-b-50">
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
											<img src="../includes/<?php echo $item["image"]; ?>" alt="IMG">
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
									<a href="index.php?view=<?php echo 'HOME'; ?>&action=empty" class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10" style="width:100%;">CREATE ANOTHER TRANSACTION</a>
						
						</div>
					</div>
				</div>

		
			</div>
		</div>
	</form>
		
	