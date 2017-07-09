<?php
  $files = $_FILES['files']['name'];
  foreach ($files as $file) {
    if (move_uploaded_file($file, '../../public/uploads/')) {
      echo "<pre />";
      print_r($file . " uploaded.");
    }else{
      echo "<pre />";
      print_r($file . " error.");
    }
  }
?>
