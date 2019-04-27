<?php
	require_once "stripe-php-master/init.php";
	require_once "seatConfirmationDeposit.php";
require_once "initialDeposit.php";
require_once "finalDeposit.php";

	$stripeDetails = array(
		"secretKey" => "sk_test_hmLGIzbJsP5zG4pWEjn1ZEHr",
		"publishableKey" => "pk_test_5Rh7cEk25rz8zP6rz475lE28"
	);

	// Set your secret key: remember to change this to your live secret key in production
	// See your keys here: https://dashboard.stripe.com/account/apikeys
	\Stripe\Stripe::setApiKey($stripeDetails['secretKey']);
?>

