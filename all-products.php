<?php
require "vendor/autoload.php";


$stripe = new \Stripe\StripeClient(
  'sk_test_51LgIWIK4C71TDWZ6pXRAwbhqG3rGU8X2CnbyXabofHlbfcMy1pSjbzqCr50E6GwR2I87Os5HI5lxf7KB041qRuZH00GTpMbyCR'
);
$result = $stripe->products->all(['limit' => 4]);
var_dump($result);