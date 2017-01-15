<?php include('scripts/php/app.func.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Test Phase</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
</head>
<body>
  <?php
    session_start(); // Started session, it will store temparary value for the current user whether the user has passed the eligiblity form or not.
    $alerts = array(); // this is the alerts bag.
    if ($_POST) {
      if (!empty($_POST['status'])) {
        $status = $_POST['status'];
        if (!empty($_POST['citizenship'])) {
          $citizenship = $_POST['citizenship'];
          if (!empty($_POST['age'])) {
            $age = $_POST['age'];
            if (!empty($_POST['income'])) {
              $income = $_POST['income'];
              if (eligibility_check($status, $citizenship, $age, $income)) {
                $alerts['success'] = "You are eligible for loan process. You will be redirected to next step in 5 seconds.";
                $_SESSION['eligiblity'] = true; // Setting value in session that the user has passed the eligibility form. 
                header('refresh:5;url=car_loan.php');
              }else{
                $alerts['error'] = "Sorry! You are not eligible for this loan.";
              }
            }else{
              $alerts['error'] = "Income field is required.";
            }
          }else{
            $alerts['error'] = "Age field is required.";
          }
        }else{
          $alerts['error'] = "Citizenship field is required.";
        }
      }else{
        $alerts['error'] = "Status field is required.";
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
          <legend>Eligibility Check</legend>
          <strong>Status</strong>
          <div class="form-group">
            <label><input type="radio" id="status" name="status" value="Salaried Individual" required> Salaried Individual</label>
            <label><input type="radio" id="status" name="status" value="Business Person" required> Business Person</label>
          </div>
          <div class="form-group">
            <label for="citizenship">Citizenship</label>
            <input type="text" id="citizenship" name="citizenship" class="form-control" placeholder="Pakistani" required pattern="Pakistani" title="Pakistani">
          </div>
          <div class="form-group">
            <label for="age">Age</label>
            <input type="number" min="22" id="age" name="age" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="income">Monthly Income</label>
            <input type="number" id="income" name="income" class="form-control" required>
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
