<?php
$db     = "mysql:host=localhost;dbname=appsec";
$user   = "chris";
$pwd    = "forza_juve";

try {
  $pdo = new PDO($db, $user, $pwd);
} catch(PDOException $e) {
  echo 'error:' . $e->getMessage();
}
?>
