<?php

set_time_limit(0);

function getStatus($bcode){
	$db = require __DIR__ . '/db_conn.php';
	$query = 'SELECT inprogress FROM scores WHERE barcode = :bar';
	$select = $db->prepare($query);
	$barcodeIn = ['bar' => $bcode];
	if ($select->execute($barcodeIn)) {
		$assocArray = $select->fetch(PDO::FETCH_ASSOC);
		return $assocArray['inprogress'];
	}
	else {
		return false;
	}
	//var_dump($row); // Uncomment for Debugging
}


//do {
//sleep(1);
//} while (getStatus($_GET['code'])

//flush();
//ob_flush()
/* while (($status = getStatus($_GET['code'])) !== true) {
	echo "Run $i</br>";
	sleep(1);
	$i++;
}
*/
while (true) {
	if (!getStatus($_GET['code'])) {
		echo "<script type=\"text/javascript\">parent.endClock('" . $_GET['code'] . "')</script>";
		break;
	}
	sleep(1);
}


//if (empty($_GET['code'])) {
//header('Location:error.php'); }

?>
