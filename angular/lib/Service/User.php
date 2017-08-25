<?php

namespace Service;

use Model\Database;

class User {

  public function getData(){
    $pdo = Database::connection();
    $table = 'users';
    $query = $pdo->prepare("SELECT * FROM $table");
    $query->execute();
    $users = $query->fetchAll(\PDO::FETCH_ASSOC);

    return json_encode($users);
  }

}
