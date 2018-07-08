<?php
function setEnd(){
  $db = require __DIR__ . '/db_conn.php';
  $loadTime = time();
  $query = "UPDATE scores SET endTime = '$loadTime' WHERE inprogress = '1'";
  $select = $db->prepare($query);
  //$barcodeIn = ['bar' => $bcode];
  $select->execute();
}

function endGame(){
  $db = require __DIR__ . '/db_conn.php';
  $loadTime = time();
  $query = "UPDATE scores SET inprogress = '0' WHERE inprogress = '1'";
  $select = $db->prepare($query);
  //$barcodeIn = ['bar' => $bcode];
  $select->execute();
}

setEnd();
endGame();
?>
