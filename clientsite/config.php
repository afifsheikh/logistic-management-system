<?php
$servername = 'localhost';
$username = "afif";
$password = "afif";
$database = "logistic";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$database);
$conStr = sprintf("mysql:host=%s;dbname=%s", $servername, $database);
   try {
      $pdo = new PDO($conStr, $username, $password);
  } catch (PDOException $e) {
      die($e->getMessage());
  }

?>