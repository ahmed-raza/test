<?php
ini_set('display_errors', 1);
require_once __DIR__.'/bootstrap.php';

use Service\User;

$users = User::getData();

echo $users;
