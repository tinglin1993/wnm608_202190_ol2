<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cart.css">
    
    <?php include "parts/web_meta.php"; ?>
</head>
<body>
    <?php include "parts/navbar.php"; ?>
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

       <main>
        <div class="container">
            <h1>Shopping Cart</h1>
            <table>
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="product1.jpg" alt="Product 1">
                                <div class="product-details">
                                    <h3>Product 1</h3>
                                    <p>This is a description of Product 1.</p>
                                </div>
                            </div>
                        </td>
                        <td>$19.99</td>
                        <td>
                            <div class="quantity">
                                <button>-</button>
                                <input type="text" value="1">
                                <button>+</button>
                            </div>
                        </td>
                        <td>$19.99</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="product-info">
                                <img src="product2.jpg" alt="Product 2">
                                <div class="product-details">
                                    <h3>Product 2</h3>
                                    <p>This is a description of Product 2.</p>
                                </div>
                            </div>
                        </td>
                        <td>$29.99</td>
                        <td>
                            <div class="quantity">
                                <button>-</button>
                                <input type="text" value="1">
                                <button>+</button>
                            </div>
                        </td>
                        <td>$29.99</td>
                    </tr>
                </tbody>
            </table>

            <div class="total">
                <h2>Total</h2>
                <p>$49.98</p>
            </div>


            <div class="checkout">
                <a href="product_checkout.php" class="button">Checkout</a>
            </div>
        </div>
    </main>

    <footer>
        <div class="container">
                  <p>&copy; 2023.All rights reserved.</p>
        </div>
    </footer>
</body>
</html>
