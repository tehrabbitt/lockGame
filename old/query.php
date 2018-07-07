<?php

$bar=56416123;

$link = mysqli_connect("localhost", "root", "Tenehawk", "lockGame");

// Check connection
if(!$link){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//Read in Database Info

$query = "SELECT handle FROM scores WHERE barcode='56416123'";
  $row=mysqli_query($query);
  echo $row['handle'];
  echo $bar;
  

mysqli_close($link);
?>
