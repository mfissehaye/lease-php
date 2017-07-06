<?php

// description.php
// get descriptions for a give user id
require_once('db.php');

$id = isset($_GET['id']) ? $_GET['id'] : -1;
header('Content-Type: application/json');
$description = get_description_by_id($id);
if($description) {
  echo json_encode($description);
} else {
  echo json_encode(['message' => 'Invalid ID']);
}
