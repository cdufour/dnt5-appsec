<?php

require('db.php');

$sql = "CREATE TABLE IF NOT EXISTS user (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    password VARCHAR(255)
  )";

$result = $pdo->query($sql);
var_dump($result);

?>
