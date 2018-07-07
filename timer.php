<?php
$startTime = time();
//echo "Current Unix Time:", $startTime;


if (isset($_GET['code'])) {
    $bar = $_GET['code'];
} else {
    die("A barcode MUST be specified");

}

//$handle = $_GET['handle'];
//$diff = $_GET['level'];

$link = mysqli_connect("localhost", "root", "Tenehawk", "lockGame");

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
//Read in Database Info


$sql = "UPDATE `scores` SET startTime='$startTime' WHERE barcode='$bar'";
if(mysqli_query($link, $sql)){
    echo "\n";
    echo "\n Start Time for '", $handle , "' has been logged.";
} else{
    echo "ERROR: Could not update TimeStamp $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

?>



<?php
echo "<h1> Contestant Information: </h2>";
echo "<h2> Handle: ", $handle , "</h2>";
echo "<h2> Difficulty Level: " , $diff , "</h2>";
?>



<?php
echo '<script type="text/javascript"> // JS code ... </script>';
?>
<script type="text/javascript">
var var_js = <?php echo $var_php; ?>;
</script>

<?php session_start(); ?>
<!-- HTML code -->
<script type="text/javascript">
</script> 

<div id="tag_ora"></div>
<script type="text/javascript"><!--
// Clock script server-time,   https://coursesweb.net

// use php to get the server time
var serverdate = new Date(<?php echo date('y,n,j,G,i,s'); ?>);
var minute = 0     // minutes
var second = 0     // seconds

// function that process and display data
function ceas() {
  second++;
  if (second>59) {
    second = 0;
    minute++;
  }

  var output = "<font size='25'><b><font size='15'>current time:</font><br />"+minute+":"+second+"</b></font>"

  document.getElementById("tag_ora").innerHTML = output;
}

// call the function when page is loaded and then at every second
window.onload = function(){
  setInterval("ceas()", 1000);
}
--></script>
