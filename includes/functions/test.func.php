<?php
  function send($name,$phone,$message){
    if (!empty($name) && !empty($phone) && !empty($message)) {
      date_default_timezone_set('Asia/Karachi');
      $sent_on = date('D M Y h:i:s A');
      $query = "INSERT INTO messages(username,phonenum,message,sent_on)VALUES('$name','$phone','$message','$sent_on')";
      if ($result = mysql_query($query)) {
        return true;
      }
      else{
        return false;
      }
    }
    else{
      return false;
    }
  }
?>
