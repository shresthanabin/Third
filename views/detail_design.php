<section class="container pt-3 pb-3">
		<?php 
			// foreach ($itemDetails as $item) { ?>
				<div class="row pt-2">
					<div class="col-md-5">
						<!-- <h2 class="text-dark"><?php echo $item['item_name']; ?></h2> -->
						<h2>Heart of Darkness</h2>
						<div class="container">
							<div class="row text-dark">
								<?php
								// if (file_exists('../images/items/' . $item['image_name'])) {
								// 	echo '<a href="../images/items/'.$item['image_name'].'"><img class="card-img-top-detail" src="../images/items/' . $item['image_name'].'" /></a>';
								// }
							?>
								<img src="../images/books/heart-of-darkness.jpg">
							</div>
						</div>

						<!-- <div id="permit" class="text-center text-danger pt-2 row alert alert-dismissible fade show">
							<div class="row">
								<div class="col-md-2"></div>
								<div class="col-md-9 bg-light rounded p-2">
									<h6 class="pb-0">You are not Logged in.</h6>
									<small class="pt-1">You cannot buy an item.</small>
									<button type="button" class="close pt-1" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><b>&times;</b></span>
									</button>
								</div>
							</div>
						</div> -->

						<div class="container-fluid text-center">
						<?php
						if (!empty($msg)) 
						{
							?>
								<div class=" p-2 bg-info alert alert-dismissible fade show">
									<?php echo $msg ?>
									<button type="button" class="close pt-1" data-dismiss="alert" aria-label="Close">
										<span aria-hidden="true"><b>&times;</b></span>
									</button>
								</div>
							<?php
						}
						?>
						</div>
					</div>

					<div class="col-md-1"></div>
					<div class="col-md-6">
						<h2>Book Information</h2>
						<div class="container border">
							<div class="row pt-2 border-bottom">
								<div class="col-md-3 ">
									<p>ISBN</p>
								</div>
								<div class="col-md-9 ">

									<!-- <?php echo $item['lot_number']; ?> -->
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Book Title</p>
								</div>
								<div class="col-md-9 ">
									<!-- <?php echo $item['item_name']; ?> -->
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Author</p>
								</div>
								<div class="col-md-9 ">
									<!-- <?php echo $item['artist']; ?> -->
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Genre</p>
								</div>
								<div class="col-md-9 ">
									<!-- <?php echo $item['category_name']; ?> -->
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Publisher</p>
								</div>
								<div class="col-md-9 ">
									<!-- <?php echo $item['classification_name']; ?> -->
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Price</p>
								</div>
								<div class="col-md-9 ">
									<!-- <?php echo '$'.$item['price']; ?> -->
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Released Year</p>
								</div>
								<div class="col-md-9 ">
									<!-- <?php echo $item['produced_year']; ?> -->
								</div>
							</div>

							<div class="row pt-2 border-bottom">
								<div class="col-md-3">
									<p>Stock Quantity</p>
								</div>
								<div class="col-md-9 ">
									<!-- <?php echo $item['auction_date']; ?> -->
								</div>
							</div>
						</div>

						<div class="mt-3">
							<form method="POST">
								<input type="hidden" name="item_id" value="<?php echo $item['lot_number']; ?>">

								<div class="form-group row">
									<label class="col-sm-3 pt-0 col-form-label">Quantity</label>
									<div class="col-md-6">
										<input type="radio" class="ml-1" name="quantity" value="1" checked="">
										<label>1</label>
										<input type="radio" class="ml-2" name="quantity" value="2">
										<label>2</label>
										<input type="radio" class="ml-2" name="quantity" value="2">
										<label>3</label>
										<input type="radio" class="ml-2" name="quantity" value="2">
										<label>4</label>
										<input type="radio" class="ml-2" name="quantity" value="2">
										<label>5</label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5">
										<button class="btn btn-outline-warning"
											<?php 
												if (!isset($_SESSION['logged_user_id'])) { 
													echo 'onclick="commissionBids()"'; }
												else echo 'onclick="noPermit()"';
											?>> Buy Now
										</button>
									</div>
									<div class="col-md-5">
										<button class="btn btn-outline-info">Add to Cart</button>
									</div>
								</div>
							</form>
						</div>

					</div>
				</div>
			<?php // } ?>
</section>

<script type="text/javascript">
	function noPermit(){
		var permit = document.getElementById("permit");
		if (permit.style.display == "block") {
			permit.style.display = "none";
		} else {
			permit.style.display = "block";
		}
	}

	function commissionBids(){
		var cBid = document.getElementById("cBid");
		if (cBid.style.display == "block") {
			cBid.style.display = "none";
		} else {
			cBid.style.display = "block";
		}
	}
</script>