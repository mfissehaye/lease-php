<?php

require_once('db.php');
require_once('user.class.php');

$users = [];
foreach(get_leases() as $user_array) {
  $users[] = User::fromArray($user_array);
}


$usersArray = [];
foreach($users as $user) {
  $usersArray[] = $user->toArray();
}

header('Content-Type: application/json');
echo json_encode($usersArray);
