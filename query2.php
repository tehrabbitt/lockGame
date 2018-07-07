<?php
$db = require __DIR__ . '/db_conn.php';

if (empty($_GET['code'])) { throw new Exception('a barcode must be specified'); }


$queryUser = 'SELECT handle, difficulty FROM scores WHERE barcode = :bar';
$select = $db->prepare($queryUser);
$barcodeIn = ['bar' => $_GET['code']];
$select->execute($barcodeIn);

$row = $select->fetch(PDO::FETCH_ASSOC);
var_dump($row);
if ($row === false) { throw new Exception('no barcode found'); }
$handle = $row['handle'];
$diff = $row['difficulty'];

echo $handle;
echo $diff;

?>
