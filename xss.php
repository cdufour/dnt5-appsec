<?php
require('db.php');

if (isset($_POST['submit'])) {
  //echo $_POST['pensiero']; // XSS reflected

  // XSS stored => enregistrement en db

  $body = $_POST['pensiero'];

  $sql = "INSERT INTO pensiero(body) VALUES(?)";
  $stm = $pdo->prepare($sql);
  $result = $stm->execute([$body]);

  echo (result) ? 'OK' : 'NOT OK';
}

// récupération des lignes de la table pensiero
$sql = "SELECT * FROM pensiero";
$pensieri = $pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>XSS</title>
  </head>
  <body>
    <h1>XSS</h1>

    <h3>A cosa stai pensando ?</h3>
    <form method="post">
      <input type="text" name="pensiero" value="">
      <input type="submit" name="submit" value="Ecco !">
    </form>

    <table>
      <th>
        <td>Pensiero</td>
      </th>
      <?php
        foreach($pensieri as $p) {
          echo '<tr><td>' . $p['body'] . '</td></tr>';
        }
      ?>
    </table>

  </body>
</html>
