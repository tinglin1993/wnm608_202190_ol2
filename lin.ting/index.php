<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pawfectly</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">

	<?php include "parts/web_meta.php"; ?>
</head>
<body>
	
	<?php include "parts/header.php"; ?>
	<header>
        <div class="container">
            <a href="index.html" class="logo">
            	<img src="img/logo.png">
            </a>
            <nav>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="aboutus.php">About Us</a></li>
                </ul>
            </nav>
            <div class="cart">
                <a href="product_cart.php">
                    <img src="img/cart.png">
                </a>
            </div>
        </div>
    </header>

<section class="banner">
	<div class="container">
		<h1>spring vibes</h1>
		<p>Shop now at our pet supplies store for all your furry friend's needs, including food, treats, toys, and accessories.  </p>
		<a href="shop.php" class="button">Shop Now</a>

		<img src="img/banner.jpg" alt="Banner image">
	</div>
</section>


	<section class="products">
		<div class="container">
			<h2>Our Products</h2>
			<div class="product-grid">
				<div class="product-card">
					<img src="img/product1.png" alt="Product 1">
					<h2>walk</h2>
					<p>Extra thick, blush & eco-friendly</p>
					<button><a href="cart.html">Add to Cart</a></button>

				</div>
				<div class="product-card">
					<img src="img/product2.png" alt="Product 2">
					<h3>Toy</h3>
					<p>3 all-natural toys - chew, toss, & tug</p>
					<button><a href="cart.html">Add to Cart</a></button>

				</div>
				<div class="product-card">
					<img src="img/product3.png" alt="Product 3">
					<h3>Collar</h3>
					<p>Color-matched harness</p>
					<button><a href="cart.html">Add to Cart</a></button>

				</div>
				<div class="product-card">
					<img src="img/product4.png" alt="Product 4">
					<h3>Treat</h3>
					<p>Organic PB&J, Fruit Salad & Veggie Burger</p>
					<button><a href="cart.html">Add to Cart</a></button>

				</div>
			</div>
		</div>
	</section>

	<footer>
		<div class="container">
			<p>&copy; 2023</p>
		</div>
	</footer>
</body>
</html>
