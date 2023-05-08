<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/storetheme.css">
    <link rel="stylesheet" href="css/shop.css">
    
    <!-- Include meta and navbar -->
    <?php include "parts/meta.php";?>
    <?php include "parts/navbar.php"; ?>
    
    <title>Shop</title>
</head>

<body>
    <div class="banner">
        <h2>Get 10% off on your first purchase!</h2>
        <p>Use code FIRST10 at checkout</p>
    </div>

    <main>
        <div class="container">
            <h1>Shop</h1>
            <p>Welcome to our shop! Here you'll find a selection of our latest products.</p>

            <!-- Search Form -->
            <form method="get">
                <label for="search">Search:</label>
                <input type="text" name="search" id="search" value="<?php echo isset($_GET['search']) ? $_GET['search'] : ''; ?>">
                <button type="submit">Search</button>
            </form>

            <!-- Filter Form -->
            <form method="get">
                <label for="filter">Filter:</label>
                <select name="filter" id="filter">
                    <option value="">Select</option>
                    <option value="low-to-high" <?php echo isset($_GET['filter']) && $_GET['filter'] == 'low-to-high' ? 'selected' : ''; ?>>Price: Low to High</option>
                    <option value="high-to-low" <?php echo isset($_GET['filter']) && $_GET['filter'] == 'high-to-low' ? 'selected' : ''; ?>>Price: High to Low</option>
                </select>
                <button type="submit">Filter</button>
            </form>

            <!-- Product Grid -->
            <div class="product-grid">
                <?php
                // Product Data
                $products = array(
                    array(
                        'name' => 'Product 1',
                        'image' => 'product1.jpg',
                        'price' => '19.99'
                    ),
                    array(
                        'name' => 'Product 2',
                        'image' => 'product2.jpg',
                        'price' => '29.99'
                    ),
                    array(
                        'name' => 'Product 3',
                        'image' => 'product3.jpg',
                        'price' => '39.99'
                    ),
                    array(
                        'name' => 'Product 4',
                        'image' => 'product4.jpg',
                        'price' => '49.99'
                    ),
                    array(
                        'name' => 'Product 5',
                        'image' => 'product5.jpg',
                        'price' => '39.99'
                    ),
                    array(
                        'name' => 'Product 6',
                        'image' => 'product6.jpg',
                        'price' => '39.99'
                    ),
                    array(
                        'name' => 'Product 7',
                        'image' => 'product7.jpg',
                        'price' => '39.99'
                    ),
                    array(
                        'name' => 'Product 8',
                        'image' => 'product8.jpg',
                        'price' => '39.99'
                    ),
                         );
   // Display products
    foreach ($products as $product) {
        ?>
        <div class="product-item">
            <img src="img/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            <h3><?php echo $product['name']; ?></h3>
            <p>$<?php echo $product['price']; ?></p>
        </div>
        <?php
    }
    ?>
    
</div>
    <footer>
        <div class="container">
            <p>&copy; 2023 My Website. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>

