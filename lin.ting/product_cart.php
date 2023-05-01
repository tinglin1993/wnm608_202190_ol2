<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="container">
            <a href="index.html" class="logo">
                <figure>
                    <img src="img/logo.png" alt="Pawfectly logo">
                </figure>
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
                    <img src="img/cart.png" alt="Shopping cart">
                </a>
            </div>
        </div>
    </header>

    <section class="cart">
        <div class="container">
            <h2>Your Cart</h2>
            <div class="cart-grid">
                <div class="cart-item">
                    <figure>
                        <img src="img/product1.png" alt="Walk product">
                        <figcaption>walk</figcaption>
                    </figure>
                    <p>Extra thick, blush & eco-friendly</p>
                    <span>$25</span>
                </div>
                <div class="cart-item">
                    <figure>
                        <img src="img/product4.png" alt="Treat product">
                        <figcaption>Treat</figcaption>
                    </figure>
                    <p>Organic PB&J, Fruit Salad & Veggie Burger</p>
                    <span>$10</span>
                </div>
            </div>
            <div class="cart-total">
                <p>Total: $35</p>
            </div>

                           <a href="product_checkout.php" class="form-button">Complete Checkout</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <p>&copy; 2023</p>
        </div>
    </footer>
</body>
</html>
