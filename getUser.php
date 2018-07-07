<?php
function getUser($bcode){
  $db = require __DIR__ . '/db_conn.php';
  $queryUser = 'SELECT handle, difficulty FROM scores WHERE barcode = :bar';
  $select = $db->prepare($queryUser);
  $barcodeIn = ['bar' => $bcode];
  $select->execute($barcodeIn);
  return $select->fetch(PDO::FETCH_ASSOC);
  //var_dump($row); // Uncomment for Debugging
}
