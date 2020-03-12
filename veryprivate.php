<?php
session_start();

if (isset($_SESSION['user']) && $_SESSION['user'] == 'tom') {
  echo 'accès autorisé';
} else {
  echo 'accès refusé';
}



?>
