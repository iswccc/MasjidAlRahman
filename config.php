<?php
	require_once "stripe-php-master/init.php";
	require_once "seatConfirmationDeposit.php";
require_once "initialDeposit.php";
require_once "finalDeposit.php";

	$stripeDetails = array(
		"secretKey" => "pk_test_Fywng1DvZnhmZtPltht2kt1T",
		"publishableKey" => "sk_test_x1g744jazyIYQXzHCvGP8ww1"
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);
?>

