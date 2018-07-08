<?php
touch ("inProgress.lock");
if (empty($_GET['code'])) { 
header('Location:error.php'); }

function getUser($bcode){
  $db = require __DIR__ . '/db_conn.php';
  $query = 'SELECT handle, difficulty FROM scores WHERE barcode = :bar';
  $select = $db->prepare($query);
  $barcodeIn = ['bar' => $bcode];
  $select->execute($barcodeIn);

  return $select->fetch(PDO::FETCH_ASSOC);
  //var_dump($row); // Uncomment for Debugging
}

function setStart($bcode){
  $db = require __DIR__ . '/db_conn.php';
  $loadTime = time();
  $query = "UPDATE scores SET startTime = '$loadTime'  WHERE barcode= :bar";
  $select = $db->prepare($query);
  $barcodeIn = ['bar' => $bcode];
  $select->execute($barcodeIn);
  return $loadTime;
}

function startGame($bcode){
  $db = require __DIR__ . '/db_conn.php';
  $loadTime = time();
  $query = "UPDATE scores SET inprogress = '1'  WHERE barcode= :bar";
  $select = $db->prepare($query);
  $barcodeIn = ['bar' => $bcode];
  $select->execute($barcodeIn);
}


$user = getUser($_GET['code']);
setStart($_GET['code']);
startGame($_GET['code']);
if ($user === false) {header('Location:error.php'); }
echo "<div style='text-align:center'>";
echo "<font size='25'><h1> Contestant Information:</h1></font>";
echo "<font size='15'> <h3> Name / Handle: ", $user['handle'] , "<br>";
echo "Difficulty Level: " , $user['difficulty'] , "</h3></font>";
echo "<h4> Timestamp Recorded as: ", setStart($_GET['code']), "</h4></div>";
echo "<font size='25'><h1>";
require __DIR__ . '/counter.php';
echo "</h1></font>";



?>

