<?php
  $username = 'root';
  $password = 'root';
  $hostname = 'localhost';
  $database = 'desi';
  mysql_connect($hostname,$username,$password) or die(mysql_error());
  mysql_select_db($database) or die(mysql_error());
?>
