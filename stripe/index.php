<?php require_once('./config.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Stripe Payment</title>
  <script type="text/javascript" src="https://js.stripe.com/v2/"></script>
  <script type="text/javascript" src="jquery.js"></script>
</head>
<body>
  <form action="charge.php" method="POST" id="payment-form">
  <span class="payment-errors"></span>

  <div class="form-row">
    <label>
      <span>Card Number</span>
      <input type="text" size="20" data-stripe="number">
    </label>
  </div>

  <div class="form-row">
    <label>
      <span>Expiration (MM/YY)</span>
      <input type="text" size="2" data-stripe="exp_month">
    </label>
    <span> / </span>
    <input type="text" size="2" data-stripe="exp_year">
  </div>

  <div class="form-row">
    <label>
      <span>CVC</span>
      <input type="text" size="4" data-stripe="cvc">
    </label>
  </div>


  <input type="submit" class="submit" value="Submit Payment">
</form>
<script type="text/javascript">
Stripe.setPublishableKey('pk_test_V3rXEnAYX8WdC2YqV45KRMf8');
$(function() {
  var $form = $('#payment-form');
  $form.submit(function(event) {
    // Disable the submit button to prevent repeated clicks:
    $form.find('.submit').prop('disabled', true);

    // Request a token from Stripe:
    Stripe.card.createToken($form, stripeResponseHandler);

    // Prevent the form from being submitted:
    return false;
  });
});
function stripeResponseHandler(status, response) {
  // Grab the form:
  var $form = $('#payment-form');

  if (response.error) { // Problem!

    // Show the errors on the form:
    $form.find('.payment-errors').text(response.error.message);
    $form.find('.submit').prop('disabled', false); // Re-enable submission

  } else { // Token was created!

    // Get the token ID:
    var token = response.id;

    // Insert the token ID into the form so it gets submitted to the server:
    $form.append($('<input type="hidden" name="stripeToken">').val(token));

    // Submit the form:
    $form.get(0).submit();
  }
};
</script>
<?php
    require_once('vendor/autoload.php');
    $stripe = array(
      "secret_key"      => "sk_test_N8TLIBgz7pUYDHikydmEi1K5",
      "publishable_key" => "pk_test_V3rXEnAYX8WdC2YqV45KRMf8"
    );
    \Stripe\Stripe::setApiKey($stripe['secret_key']);
    $coupon  = \Stripe\Coupon::retrieve("123");
?>
<pre><?php
          date_default_timezone_set("America/Toronto");
          $time = date('h', time() - 7200);
          $time = strtotime($time);
          print_r(humanTiming(1487751939) . "<br>");
          print_r(time() - 3600);

// 1487681302
          function humanTiming($time) {
            $time = time() - $time; // to get the time since that moment
            $time = ($time<1)? 1 : $time;
            $tokens = array (
              31536000 => 'year',
              2592000 => 'month',
              604800 => 'week',
              86400 => 'day',
              3600 => 'hour',
              60 => 'minute',
              1 => 'second'
              );
            foreach ($tokens as $unit => $text) {
              if ($time < $unit) continue;
              $numberOfUnits = floor($time / $unit);
              return $numberOfUnits.''.$text.(($numberOfUnits>1)?'s':'');
            }
          }
     ?></pre>
</body>
</html>
