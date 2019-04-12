<?php
require_once('vendor/autoload.php');

$stripe = [
  "secret_key"      => "sk_test_x1g744jazyIYQXzHCvGP8ww1",
  "publishable_key" => "pk_test_Fywng1DvZnhmZtPltht2kt1T",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
