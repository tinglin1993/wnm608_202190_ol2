
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Checkout</title>
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
    


	<div class="container">
		<div class="card soft">
			<h2>Product Checkout</h2>


<h3>Address</h3>

<form class="form">
    <div class="form-control">
        <label for="address-street" class="form-label">Street</label>
        <input id="address-street" type="text" placeholder="Street name" class="form-input">
    </div>
    <div class="form-control">
        <div class="grid gap">
            <div class="col-xs-12 col-md-6">
                <label for="address-city" class="form-label">City</label>
                <input id="address-city" type="text" placeholder="City" class="form-input">
            </div>
            <div class="col-xs-12 col-md-6">
                <label for="address-state" class="form-label">State</label>
                <input id="address-state" type="text" placeholder="State" class="form-input">
            </div>
        </div>
    </div>
    <div class="form-control">
        <div class="grid gap">
            <div class="col-xs-12 col-md-6">
                <label for="address-zip" class="form-label">Zip Code</label>
                <input id="address-zip" type="text" placeholder="Zip Code" class="form-input">
            </div>
            <div class="col-xs-12 col-md-6">
                <label for="address-country" class="form-label">Country</label>
                <input id="address-country" type="text" placeholder="Country" class="form-input">
            </div>
        </div>
    </div>
    <div class="form-control">
        <input type="submit" class="form-button" value="Submit">
    </div>
</form>

<h3>Payment</h3>

<form class="form">
  <div class="form-control">
    <label for="payment-name" class="form-label">Full Name</label>
    <input id="payment-name" type="text" placeholder="Name" class="form-input">
  </div>
  <div class="form-control">
    <label for="payment-number" class="form-label">Card Number</label>
    <input id="payment-number" type="text" placeholder="###-###-###-####" class="form-input">
  </div>
  <div class="form-control">
    <div class="grid gap">
      <div class="col-xs-12 col-md-6">
        <label for="payment-expiration" class="form-label">Expiration</label>
        <input id="payment-expiration" type="text" placeholder="MM-yy" class="form-input">
      </div>
      <div class="col-xs-12 col-md-6">
        <label for="payment-cvv" class="form-label">CVV</label>
        <input id="payment-cvv" type="text" placeholder="CVV" class="form-input">
      </div>
    </div>
  </div>
  <div class="form-control">
    <label for="payment-zip" class="form-label">Zip Code</label>
    <input id="payment-zip" type="text" placeholder="Zip Code" class="form-input">
  </div>
  <div class="form-control">
  <!-- <input type="submit" class="form-button" value="Submit"> -->

                <a href="product_confirmation.php" class="form-button">Complete Checkout</a>
        </div>
    </form>
        </div>
    </div>

</body>
</html>