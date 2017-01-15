<?php include('scripts/php/app.func.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test Phase</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <style type="text/css">
    .prices {
      display: none;
    }
  </style>
  <script type="text/javascript" src="forms.js"></script>
</head>
<body>
  <?php
    $alerts = array(); // this is the alerts bag.
    if ($_POST) {
      if (!empty($_POST['cars'])) {
        $cars = $_POST['cars'];
        if (!empty($_POST['prices'])) {
          $prices = $_POST['prices'];
          if (!empty($_POST['dpayment'])) {
            $dpayment = $_POST['dpayment'];
            if (!empty($_POST['years'])) {
              $years = $_POST['years'];
              if (!empty($_POST['markup_rate'])) {
                $markup_rate = $_POST['markup_rate'];
                $alerts['success'] = "Total payment value per month for your ". $cars ." is ". calculate_plan($cars, $prices, $dpayment, $years, $markup_rate) .".";
              }
            }
          }
        }
      }
    }
  ?>
  <div class="container">
    <h2>Car Loan Application</h2>
    <div class="well">
      <?php if (isset($alerts['error'])) { ?>
        <div class="alert alert-danger">
          <h4 class="alert-heading">Error!</h4>
          <p><?php echo $alerts['error']; ?></p>
        </div>
      <?php } elseif(isset($alerts['success'])){ ?>
        <div class="alert alert-success">
          <h4 class="alert-heading">Success!</h4>
          <p><?php echo $alerts['success']; ?></p>
        </div>
      <?php } ?>
      <form action="" method="POST">
        <fieldset>
          <legend>Monthly Installment Plan</legend>
          <strong>Cars</strong>
          <div class="form-group">
            <select name="cars" id="cars" class="form-control" required onchange="installments_form()">
              <option value="-1">Please Select Your Car</option>
              <option value="Toyota">Toyota</option>
              <option value="Honda">Honda</option>
              <option value="Mercedes">Mercedes</option>
              <option value="BMW">BMW</option>
            </select>
          </div>
          <div class="form-group">
            <select name="prices" id="prices" class="form-control prices" required>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
              <option value=""></option>
            </select>
          </div>
          <div class="form-group">
            <label for="dpayment">Down Payments (%)</label>
            <input type="number" id="dpayment" name="dpayment" class="form-control" placeholder="20% - 50%" required min="20" max="50">
          </div>
          <strong>Number of Years</strong>
          <div>
            <label for="years3"><input type="radio" name="years" id="years3" value="3" required> 3 years</label>
          </div>
          <div>
            <label for="years4"><input type="radio" name="years" id="years4" value="4" required> 4 years</label>
          </div>
          <div>
            <label for="years5"><input type="radio" name="years" id="years5" value="5" required> 5 years</label>
          </div>
          <div class="form-group">
            <label for="markup_rate">Markup Rate (%)</label>
            <input type="number" id="markup_rate" name="markup_rate" class="form-control" placeholder="10% - 15%" required min="10" max="15">
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary full">
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</body>
</html>
