<?php
  require_once('config.php');
  \Stripe\Stripe::setVerifySslCerts(false);

  $token  = $_POST['stripeToken'];

  $customer = \Stripe\Customer::create(array(
      'email' => ($_POST['stripeEmail']),
      'source'  => $token
  ));

  $charge = \Stripe\Charge::create(array(
      'customer' => $customer->id,
      'amount'   => ($_POST['amount']*100),
      'currency' => 'usd'
      'source'  => $token
  ));
  ));

echo 'Success! You have been charged $' . ($_POST['amount']*100);
?>
