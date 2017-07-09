<?php
  require 'scripts/php/auth.php';
  require 'scripts/php/file.php';
  if (isset($_SESSION['login'])) {
    $current_user = Auth::current_user($_SESSION['login']);
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="text/javascript" src="assets/js/jquery.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.js"></script>
  <script type="text/javascript">
    $('#myModal').on('shown.bs.modal', function () {
      $('#myInput').focus()
    });
  </script>
</head>
<body>
<div class="container">
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <a class="navbar-brand" href="#">Test Phase 2</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <?php if(isset($_SESSION['login'])): ?>
            <?php if($current_user[0]['typetitle'] == 'admin'): ?>
              <li><a href="addfile.php">Add File Record</a></li>
            <?php endif; ?>
            <li><a href="showfile.php">Show File Record</a></li>
            <li><a href="logout.php">Logout</a></li>
          <?php endif; ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
</div>
