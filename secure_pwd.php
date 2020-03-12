<?php

$p = "Dominique_2020";

echo "Clear: " . $p;
echo "<br>";
echo "Hashed/salted: " . password_hash($p, PASSWORD_DEFAULT);


?>
