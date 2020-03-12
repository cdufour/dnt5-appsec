<?php

session_start();

if($_POST['submit']) { // POST
  if ($_POST['token'] == $_SESSION['token']) {
    echo 'OK';
  } else {
    echo 'NOT OK';
  }
  $token = "";
} else { // ressource requise en GET
  $token = bin2hex(random_bytes(10));
  $_SESSION['token'] = $token;
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Anti-CSRF</title>
  </head>
  <body>
    <h1>Anti-CSRF</h1>
    <form method="post">
      <input type="hidden" name="token" value="<?=$token ?>"/>

      <input type="text" placeholder="nouveau mot de passe" name="new_pwd"/>
      <input type="text" placeholder="confirmation" name="new_pwd_conf" />
      <input type="submit" value="Change" name="submit"/>
    </form>

  </body>
</html>
