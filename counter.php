<?php
// echo '<script type="text/javascript"> // JS code ... </script>';
?>

<!-- HTML code -->
<script type="text/javascript">
var myVar = setInterval("ceas()",1000);
</script>

<div id="tag_ora"></div>
<script type="text/javascript"><!--
function endClock($bcode) {

	clearInterval(myVar);
	alert("Congrats! You've Completed the Challenge!");
}
// use php to get the server time
var serverdate = new Date(<?php echo date('y,n,j,G,i,s'); ?>);
var minute = 0     // minutes
var second = 0     // seconds

// function that process and display data
function ceas() {
//dClock('test');
  second++;
  if (second>59) {
    second = 0;
    minute++;
  }

  var output = "<div align='center' style='font-size:300%'><b>"+minute+":"+second+"</b></div>"


  document.getElementById("tag_ora").innerHTML = output;
}

// call the function when page is loaded and then at every second
//window.onload = function(){
//	setInterval("ceas()", 1000);
//}
--></script>
