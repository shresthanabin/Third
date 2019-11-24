<?php
	// if(session_id() == '' || !isset($_SESSION)) {
	// 	session_start();
	// }
	// if (!isset($_SESSION['user'])) {
 //        header('location:login');
 //    }
 //    else{
 //    	$now = time();
	//     if ($now > $_SESSION['expire']) {
	//     	session_start();
	// 		session_destroy();
	// 		session_unset();
	// 		header('location:login?msg=Session time out!<br>Please Login Again!');
	//     }
 //    }
?>
<section class="container pt-3 pb-3">
	<!-- <p>Hello, <b><i><?php echo $_SESSION['user']; ?></i></b> -->
	<!-- welcome to Online Book Store</p> -->
	
	<div class="row col-md-8">
		<h2 class="">Books</h2>
		<p><a class="btn btn-sm btn-outline-info ml-5 mt-2" href="item">View All Items</a></p>
	</div>
	
	<div class="card-deck border-top">
		<?php
		/*	$i = 0;
			foreach ($items as $item) {
				$i++;
				?>
				<div class="col-md-3"> 
					<div class="card mt-3 m-0">
						<?php 
							if (file_exists('../images/items/' . $item['image_name'])) {
								echo '<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/items/' . $item['image_name'].'" /></a>';
							}
						?>
						<div class="card-body">
							<p class="mb-0 text-muted"><b><?php echo 'Item title: '.$item['item_name']; ?></b></p>
							<p class="mb-0 text-muted"><b><?php echo 'Start Price:  &#0163;'.$item['price']; ?></b></p>
							<p class="mb-1 text-muted"><b><?php echo 'Auction Date: '.$item['auction_date']; ?></b></p>
							<p class="text-muted" style="height: 50px;"><?php echo substr($item['description'], 0, 50).' ...'; ?></p>
							<p class="text-center"><?php echo '<a class="btn btn-success btn-sm " href="view_detail?vid='.$item['lot_number'].'">Show Detail</a>'; ?> </p>
						</div>
					</div>
				</div>
			<?php
			if ($i == 9) { break; }
		}*/ 
		?>
		<!--  ******************************************************************************************************************* -->
		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/heart-of-darkness.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: Heart of Darkness</b></p>
					<p class="mb-0 text-muted"><b>Author: Joseph Conrad</b></p>
					<p class="mb-0 text-muted"><b>Price: $55.45</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm" href="detail">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>
		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/handmaid.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: The Handmaid's Tale</b></p>
					<p class="mb-0 text-muted"><b>Author: Margaret Atwood</b></p>
					<p class="mb-0 text-muted"><b>Price: $42.8</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>
		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/heart-of-darkness.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: Heart of Darkness</b></p>
					<p class="mb-0 text-muted"><b>Author: Joseph Conrad</b></p>
					<p class="mb-0 text-muted"><b>Price: $55.45</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>
		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/handmaid.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: The Handmaid's Tale</b></p>
					<p class="mb-0 text-muted"><b>Author: Margaret Atwood</b></p>
					<p class="mb-0 text-muted"><b>Price: $42.8</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>

		<!-- ------------------------------------- -->
		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/handmaid.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: The Handmaid's Tale</b></p>
					<p class="mb-0 text-muted"><b>Author: Margaret Atwood</b></p>
					<p class="mb-0 text-muted"><b>Price: $42.8</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>

		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/heart-of-darkness.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: Heart of Darkness</b></p>
					<p class="mb-0 text-muted"><b>Author: Joseph Conrad</b></p>
					<p class="mb-0 text-muted"><b>Price: $55.45</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>

		<div class="col-md-3"> 
			<div class="card mt-3 m-0">
				<a href="../images/items/'.$item['image_name'].'"><img  class="card-img-top" src="../images/books/handmaid.jpg" /></a>
				<div class="card-body">
					<p class="mb-0 text-muted"><b>Book Name: The Handmaid's Tale</b></p>
					<p class="mb-0 text-muted"><b>Author: Margaret Atwood</b></p>
					<p class="mb-0 text-muted"><b>Price: $42.8</b></p>
					<p class="text-center"><?php echo '<a class="btn btn-success btn-sm">Show Detail</a>'; ?> </p>
				</div>
			</div>
		</div>
		
	</div>
</section>