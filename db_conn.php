<?php
$host = "localhost";
$dbname = "lockGame";
$user = "gameUser";
$pass = "69wwNI3WXfyzr4gm";
$charset = "UTF8MB4"; // if your db does not use CHARSET=UTF8MB4, you should probably be fixing that
$dsn = "mysql:host={$host};dbname={$dbname};charset={$charset}";
$options = [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // highly recommended
  PDO::ATTR_EMULATE_PREPARES => false // ALWAYS! ALWAYS! ALWAYS!
];

return new PDO($dsn, $user, $pass, $options);
