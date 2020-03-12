<?php
session_start();
require('db.php');

if ($_POST['submit']) {
  //echo "<p>Formulaire soumis</p>";
  $u = $_POST['username'];
  $p = $_POST['password'];
  echo "u:" .$u . "/p:" . $p;

  $sql = 'SELECT * FROM user WHERE username = ? AND password = ?';
  $stm = $pdo->prepare($sql);
  $stm->execute([$u, $p]);
  $user = $stm->fetch();

  if ($user) {
    echo ' => OK';
    $_SESSION['user'] = $u;
  } else {
    echo ' => NOT OK';
  }
}
?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login fort</title>
  </head>
  <body>
    <h1>Login fort</h1>
    <form class="" method="post">
      <input type="text" name="username" placeholder="Nom d'utilisateur" />
      <input type="text" name="password" placeholder="Mot de passe" />
      <input type="submit" name="submit" value="Valider" />
    </form>

  </body>
</html>
