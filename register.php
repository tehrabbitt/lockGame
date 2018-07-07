<?php

$db = require __DIR__ . '/db_conn.php';
$code = md5(uniqid());

function registerUser($db, $bcode, $handle, $difficulty){
  $query = 'INSERT INTO scores(barcode, handle, difficulty) VALUES ( :barcode, :handle, :difficulty)';
  $select = $db->prepare($query);
  $select->execute(["barcode" => $bcode, "handle" => $handle, "difficulty" => $difficulty]);
}

registerUser($db, $code, htmlspecialchars($_POST["handle"]) , htmlspecialchars($_POST["difficulty"]));

echo "User has been added with barcode: ", $code;
?>
