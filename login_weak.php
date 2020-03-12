<?php
require('db.php');

if ($_POST['submit']) {
  //echo "<p>Formulaire soumis</p>";
  $u = $_POST['username'];
  $p = $_POST['password'];
  echo "u:" .$u . "/p:" . $p;

  // $sql = "SELECT * FROM user
  //   WHERE username = '" . $u . "'
  //   AND password = '" . $p . "'";

  $sql = "SELECT * FROM user WHERE username = '$u' AND password = '$p'";


  $result = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
  //var_dump($result);
  if (sizeof($result) > 0) {
    echo ' => OK';
  } else {
    echo ' => NOT OK';
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login faible</title>
  </head>
  <body>
    <h1>Login faible</h1>
    <form class="" method="post">
      <input type="text" name="username" placeholder="Nom d'utilisateur" />
      <input type="text" name="password" placeholder="Mot de passe" />
      <input type="submit" name="submit" value="Valider" />
    </form>

  </body>
</html>
