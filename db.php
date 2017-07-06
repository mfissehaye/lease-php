<?php

require_once('config.php');

function db_connect() {
  global $config;
  return new PDO('mysql:host=localhost;dbname=' . $config['DB_NAME'], $config['DB_USER'], $config['DB_PASS']);
}

function get_leases() {
  global $config;

  $connection = db_connect();
  $query = "SELECT * from " . $config['TABLE_NAME'];
  $stmt = $connection->prepare($query);
  $stmt->execute();
  return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function get_description_by_id($id) {
  global $config;

  $connection = db_connect();
  $query = "SELECT description from " . $config['DESCRIPTION_TABLE_NAME'] . " WHERE user_id=" . $id;
  $stmt = $connection->prepare($query);
  $stmt->execute();
  return $stmt->fetch(PDO::FETCH_ASSOC);
}
