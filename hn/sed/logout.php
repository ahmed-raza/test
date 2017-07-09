<?php
  // Killing session to logout user.
  session_start();
  session_destroy();
  header("Location: index.php");
?>
