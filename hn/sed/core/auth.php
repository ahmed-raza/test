<?php
  session_start(); // starts the login session
  include_once('database/connection.db.php');
  class Auth{
    public function login($username, $password){
      global $connection;
      if (!empty($username) && !empty($password)) {
        $query = "SELECT * FROM UserDetails WHERE username='$username' AND password='$password'";
        $run_query = mysqli_query($connection, $query);
        $result = mysqli_num_rows($run_query);
        if ($result == 1) {
          $_SESSION['login'] = $username;
          return true;
        }else{
          $query = "SELECT * FROM admin WHERE username='$username' AND password='$password'";
          $run_query = mysqli_query($connection, $query);
          $result = mysqli_num_rows($run_query);
          if ($result == 1) {
            $_SESSION['login'] = $username;
            return true;
          }
        }
      }else{
        return false;
      }
    }

    public function register(array $registration_data){
      global $connection;
      if (isset($registration_data)) {
        $username = $registration_data['username'];
        $fullname = $registration_data['fullname'];
        $password = $registration_data['password'];
        $email = $registration_data['email'];
        $query = "SELECT * FROM UserDetails WHERE username='$username' OR emailid='$email'";
        $result = mysqli_query($connection, $query);
        $result = mysqli_num_rows($result);
        if ($result == false) {
          $new_user = "INSERT INTO UserDetails (username,name,emailid,password) VALUES ('$username','$fullname','$email','$password')";
          $save_new_user = mysqli_query($connection, $new_user);
          if ($save_new_user) {
            $newly_saved_user = mysqli_query($connection, "SELECT * FROM UserDetails WHERE username='$username'");
            $newly_saved_user = mysqli_fetch_assoc($newly_saved_user);
            $newly_user_id = $newly_saved_user['user_id'];
            $updateUserType = mysqli_query($connection, "INSERT INTO UserType (usertypeid,typetitle) VALUES ('$newly_user_id','user')");
            if ($updateUserType) {
              return true;
            }
          }else{
            return false;
          }
        }else{
          return false;
        }
      }else{
        return false;
      }
    }

    public function current_user($username){
      global $connection;
      $current_user = [];
      if (!empty($username)) {
        if ($username == 'admin') {
          // First find all data from admin table
          $find_user = mysqli_query($connection, "SELECT * FROM admin WHERE username='$username'");
          $fetch_user = mysqli_fetch_assoc($find_user);
          // Now getting UserType from UserType table
          $usertypeid = $fetch_user['id'];
          $findUserType = mysqli_query($connection, "SELECT * FROM UserType WHERE usertypeid='$usertypeid'");
          $userType = mysqli_fetch_assoc($findUserType);
          $current_user = $fetch_user;
          $current_user[] = $userType;
          return $current_user;
        }else{
          // First find all data from UserDetails table
          $find_user = mysqli_query($connection, "SELECT * FROM UserDetails WHERE username='$username'");
          $fetch_user = mysqli_fetch_assoc($find_user);
          // Now getting UserType from UserType table
          $usertypeid = $fetch_user['user_id'];
          $findUserType = mysqli_query($connection, "SELECT * FROM UserType WHERE usertypeid='$usertypeid'");
          $userType = mysqli_fetch_assoc($findUserType);
          $current_user = $fetch_user;
          $current_user[] = $userType;
          return $current_user;
        }
      }else{
        return false;
      }
    }
  }
?>
