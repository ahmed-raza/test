<?php
  include 'header.php';
  // Check if admin
  if ($current_user[0]['typetitle'] !== 'admin') {
    header("Location: index.php");
  }else{
    $file = File::delete($_GET['file_id']);
    if ($file) {
      header('Location: showfile.php');
    }
  }
?>
