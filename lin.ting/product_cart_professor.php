<?php

include_once "lib/php/function.php";
include_once "parts/templates.php";

$cart_items = getCartItem();

?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
	<title>Cart page</title>
</head>
<body>
	<?php include "parts/header.php"; ?>
	
	<section class="cart-page">
		<div class="container">
			<h2>In Your Cart</h2>
			<div class="card soft">
				<div class="grid gap">
					<div class="col-xs-12 col-md-7">
						<div class="card soft">

							<?= array_reduce($cart_items,'cartListTemplate' )?>
						</div>
					</div>
					<div class="col-xs-12 col-md-5">
						<div class="card soft flat">
							<?= cartTotals() ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php include "parts/footer.php"; ?>
</body>
</html>
