<?php
  include 'header.php';
?>
<div class="container">
  <div class="jumbotron">
  <h1 >College Education File System</h1>
  <h4>BC130200964</h4>
  <?php if(!isset($_SESSION['login'])): ?>
    <div class="actions">
      <a data-toggle="modal" data-target="#login"><i class="glyphicon glyphicon-log-in"></i> Login</a>
      <a data-toggle="modal" data-target="#register"><i class="glyphicon glyphicon-user"></i> Register</a>
    </div>
  <?php else: ?>
    <h3>Welcome <?php echo $current_user['username']; ?>.</h3>
    <p>Your rank is: <?php echo $current_user[0]['typetitle']; ?></p>
    <p>Email: <?php echo $current_user['emailid']; ?></p>
    <a href="logout.php">Logout</a>
  <?php endif; ?>
  </div>
</div>

<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="loginModalLabel">Login</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control">
          </div>
          <div class="form-group">
            <input type="submit" value="Login" name="btn_login" class="btn btn-primary long-button">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="registerModalLabel">Register</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post">
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" class="form-control" id="username">
          </div>
          <div class="form-group">
            <label for="fullname">Full Name:</label>
            <input type="text" name="fullname" class="form-control" id="fullname">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" class="form-control" id="password">
          </div>
          <div class="form-group">
            <label for="access_code">Access Code:</label>
            <input type="text" name="accesscode" class="form-control" id="access_code">
          </div>
          <div class="form-group">
            <input type="submit" value="Register" name="btn_register" class="btn btn-primary long-button">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
