<?php
$filename= "/var/www/html/game.lock";
while (!file_exists($filename)) sleep(1);
header("Location: complete.php");
die();
?>
