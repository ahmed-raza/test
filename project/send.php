<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $message = $_POST['message'] . '<br>';
  $message .= $name . '<br>';
  $message .= $email . '<br>';
  $message .= $phone . '<br>';
  $headers  = 'MIME-Version: 1.0' . "\r\n";
  $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
  if (mail("b.blueiv@gmail.com","Software",$message,$headers)) {
    header('Location: contact.html');
  }
  // b.blueiv@gmail.com
?>
