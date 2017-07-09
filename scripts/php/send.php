<?php
  require('../../includes/core.test.php');
  if (isset($_GET['name']) && !empty($_GET['name'])) {
    $name = $_GET['name'];
    if (isset($_GET['phone']) && !empty($_GET['phone'])) {
      $phone = $_GET['phone'];
      if (isset($_GET['message']) && !empty($_GET['message'])) {
        $message = $_GET['message'];
        if (send($name,$phone,$message)) {
          echo "Message sent.";
        }
        else{
          echo "Failed to send message.";
        }
      }
      else{
        echo "Please enter a message";
      }
    }
    else{
      echo "Please enter A phone numebr";
    }
  }
  else{
    echo "Please enter a name";
  }
?>
