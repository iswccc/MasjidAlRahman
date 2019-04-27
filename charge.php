<?php
require_once('path/to/stripe-php-library/init.php');
// set up messaging
$error = '';
$success = '';
if ($_POST) {
  // Set your secret key: remember to change this to your live secret key in production
  // See your keys here https://dashboard.stripe.com/account
  \Stripe\Stripe::setApiKey("sk_test_your_secret_key");
  // Get the credit card and customer interaction details submitted by the form
  $token = $_POST['stripeToken'];
  $custemail = $_POST['stripeEmail'];
  $donation = $_POST['donationAmt'];
  // Create the customer
  $customer = \Stripe\Customer::create(array(
    "source" => $token,
    "description" => $custemail,
    "email" => $custemail
  ));
  // Create the charge on Stripe's servers - this will charge the user's card
  try {
    $charge = \Stripe\Charge::create(array(
      "amount" => $donation,
      "currency" => "usd",
      "customer" => $customer->id,
      "receipt_email" => $custemail,
      "description" => "Online Donation - $custemail"
    ));
    $success = 'Your payment was successful.';
  } catch(\Stripe\Error\Card $e) {
    // The card has been declined from some reason
    $error = $e->getMessage();
  }
  // send back messaging json
  $arr = array(
    'success'=>$success,
    'error'=>$error
  );
  echo json_encode($arr);
}
?>

