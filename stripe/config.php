<?php
require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_N8TLIBgz7pUYDHikydmEi1K5",
  "publishable_key" => "pk_test_V3rXEnAYX8WdC2YqV45KRMf8"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
?>
