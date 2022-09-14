<?php

require "vendor/autoload.php";

$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIWIK4C71TDWZ6pXRAwbhqG3rGU8X2CnbyXabofHlbfcMy1pSjbzqCr50E6GwR2I87Os5HI5lxf7KB041qRuZH00GTpMbyCR'
);
$product = $stripe->products->retrieve(
	'prod_MP8JP6pIF4v8OJ',
	[]
);
$price = $stripe->prices->retrieve('price_1LgK3IK4C71TDWZ6FUdO4jt3',[]);
//echo '<pre>';
//var_dump($product);
//var_dump($price);
//echo '</pre>';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Buy the new PS5!</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?version=3.52.1&features=fetch"></script>
    <script src="https://js.stripe.com/v3/"></script>
  </head>
  <body>
    <section>
      <div class="product">
        <img src="<?php echo array_pop($product->images); ?>" alt="<?php echo $product->name; ?>" />
        <div class="description">
          <h3><?php echo $product->name; ?></h3>
          <p><?php echo $product->description; ?></p>
          <h5><?php echo strtoupper($price->currency); ?> <?php echo $price->unit_amount_decimal; ?></h5>
        </div>
      </div>
      <form action="/stripe/checkout-session.php" method="POST">
        <button type="submit" id="checkout-button">Checkout</button>
      </form>
    </section>
  </body>
</html>