<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $send_mail = mail('ahmed.raza@square63.com', 'Ahmed Raza', $name.$email.$subject.$message);
  if ($send_mail) {
    echo "Thank you.";
  }
  else{
    echo "Error";
  }
?>
