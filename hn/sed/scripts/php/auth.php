<?php
  include_once('core/auth.php');
  if (isset($_POST['btn_register'])) {
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $accesscode = $_POST['accesscode'];
    if (!empty($username) && !empty($fullname) && !empty($email) && !empty($password) && !empty($accesscode)) {
      if (strlen($password) < 6) {
        echo "Password should be atleast 6 characters.";
      }else{
        $password = md5($password); // Hashing password for security.
        $registration_data = array(
          'username'=>$username,
          'fullname'=>$fullname,
          'email'=>$email,
          'password'=>$password,
          'accesscode'=>$accesscode
           );
        if (Auth::register($registration_data)) {
          echo "Registered";
        }else{
          echo "Failed to register, user already exists.";
        }
      }
    }else{
      echo "Please fill out required fields.";
    }
  }

  if (isset($_POST['btn_login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (!empty($username) && !empty($password)) {
      if (strlen($password) < 6) {
        echo "Password should be atleast 6 characters.";
      }else{
        $password = md5($password);
        if (Auth::login($username, $password)) {
          header('Location: index.php');
        }else{
          echo "Username or password is wrong.";
        }
      }
    }else{
      echo "Please fill out required fields.";
    }
  }
?>
