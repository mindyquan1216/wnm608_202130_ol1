<?php 

	include_once "lib/php/functions.php";

	$product = makeQuery(makeConn(), "SELECT * FROM `products` WHERE `id` = ".$_GET['id'])[0];

	//print_p($product);

	$images = explode(",", $product->images);


	$cart_product = cartItemById($_GET['id']);

?>



<!DOCTYPE html>  <!--html:5 -->

<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">  
	
	<title>Recently Added</title>

	<?php include "parts/meta.php"; ?>


</head>

<body style="background-color: white; padding: 0;">

	<div style="background-color: #e5c2c1; width: 100%; height: 2em;">
		
	</div>
	<?php include "parts/header_nav.php"; ?>

	
	<div class="container individual_item" style="margin-bottom: 6em;">
		


		<div class="recently_added">
			<div class="item_line" style="margin-top: 1.5em;">
				<h2>Recently Added</h2>
				
				<div class="divide_line1" style="margin-top: -1.4em;"></div>
			</div>
		</div>


		<div class="item_intro1 container">
			
			<div class="grid gap">
				<div class="col-xs-12 col-md-6" class="recent_thumb">
					<div class="figure" style="width: 80%;">
						<div class="image-main image_added">
							<img src="img/<?= $product->thumbnail ?>" alt="">
						</div>
					</div>

				</div>
			

			
				<div class="item_info flex-none" style="margin-top: 0.5em;">
					<div class="item_detail col-xs-12 col-md-6" >
						<div class="recent_item">
							<ol style="list-style: none; margin-left: -3.4em;">
								<li class="item_name">
									<span class="item_bold">Name: </span>
									<span><?= $product->name ?></span>
								</li>
								<li class="item_price" style="margin-top: 1em;">
									<span class="item_bold">Price: </span>
									<span>&dollar;<?= $product->price ?></span>
							
								</li>
								<li style="margin-top: 1em;">
									
									<span class="item_bold">Quantity: </span>
									<span><?= $cart_product->amount ?></span>
							
								</li>
							
								<li style="margin-top: 1em;">
									
									<span class="item_bold">Size: </span>
									<span><?= $cart_product->size ?></span>
							
								</li>
							
							
								
							</ol>
							
							<div class="form-control addToCart" style="margin-top: 2em; margin-left: -1em;">
								<a href="product_cart.php" class="form-button button_filled1">Go To Cart</a>
							</div>
						</div>
					</div>
				
				
					
				</div>
				
				
			</div>



			<div class="back_button" style="margin-top: 0; text-align: right;">
				<div class="continute_but">
				
					<a href="product_list.php">Continue Shopping &#8640;</a>

				</div>
			</div>
			
</div>

</div>
		

	<?php include "footer.php"; ?>





</body>
</html>