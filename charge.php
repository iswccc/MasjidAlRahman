<?php
  require_once('./config.php');

  $token  = $_POST['stripeToken'];
  $email = $_POST["stripeEmail"];

  $customer = \Stripe\Customer::create(array(
      'email' => ($_POST['stripeEmail']),
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => ($_POST['amount']*100),
      'currency' => 'usd'
  ));

  echo '<h1>Successfully charged $50.00!</h1>';
?>
