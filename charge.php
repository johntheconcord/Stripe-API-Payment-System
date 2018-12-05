<?php
  require_once('vendor/autoload.php');
  
  \Stripe\Stripe::setApiKey('sk_test_dipxLu6TCYp0d4s6VbJjYKaA');
 // Sanitize POST Array
 $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
 $first_name = $POST['first_name'];
 $last_name = $POST['last_name'];
 $email = $POST['email'];
 $token = $POST['stripeToken'];
// Create Customer In Stripe
$customer = \Stripe\Customer::create(array( 
  "email" => $email,
  "source" => $token
));
// Charge Customer
$charge = \Stripe\Charge::create(array(
    // Make amount of charge $50 US Dollars and return description and customer
  "amount" => 5000,
  "currency" => "usd",
  "description" => "Intro To React Course",
  "customer" => $customer->id
));
// Customer Data
$customerData = [
  'id' => $charge->customer,
  'first_name' => $first_name,
  'last_name' => $last_name,
  'email' => $email
];

// Redirect to success
header('Location: success.php?tid='.$charge->id.'&product='.$charge->description);














