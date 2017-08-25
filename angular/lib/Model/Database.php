<?php

namespace Model;

class Database {
  public function connection(){
    $pdo = new \PDO("mysql:host=localhost;dbname=oop", "root");
    $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    return $pdo;
  }
}
