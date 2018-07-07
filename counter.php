<?php
echo '<script type="text/javascript"> // JS code ... </script>';
?>
<script type="text/javascript">
var var_js = <?php echo $var_php; ?>;
</script>

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

  var output = "<div align='center' style='font-size:300%'><b>"+minute+":"+second+"</b></div>"


  document.getElementById("tag_ora").innerHTML = output;
}

// call the function when page is loaded and then at every second
window.onload = function(){
  setInterval("ceas()", 1000);
}
--></script>
