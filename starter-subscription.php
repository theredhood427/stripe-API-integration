<?php
require_once('vendor/autoload.php');

$stripe = new \Stripe\StripeClient("sk_test_51LgIWIK4C71TDWZ6pXRAwbhqG3rGU8X2CnbyXabofHlbfcMy1pSjbzqCr50E6GwR2I87Os5HI5lxf7KB041qRuZH00GTpMbyCR");

$product = $stripe->products->create([
  'name' => 'Starter Subscription',
  'description' => '$12/Month subscription',
]);
echo "Success! Here is your starter subscription product id: " . $product->id . "\n";

$price = $stripe->prices->create([
  'unit_amount' => 1200,
  'currency' => 'usd',
  'recurring' => ['interval' => 'month'],
  'product' => $product['id'],
]);
echo "Success! Here is your premium subscription price id: " . $price->id . "\n";

?>