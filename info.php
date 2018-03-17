
<?php

session_start();

$n = $_GET['n'];
$a = $_GET['a'];
$p = $_GET['p'];
$pic=$_GET['pic'];


?>



<style type="text/css">
    .control-group  {
        width: 500px;
        clear: both;
    }
    .conntrol-group input {
        width: 100%;
        clear: both;
    }

    </style>
<center>
<div id="legend">
<font size="12">
<font face="sans-serif">
<legend class=""><h3><?php echo $n; ?></h3></legend></font>


<font size="8">
<div class="controls">        
<div class="control-group">
<br>
<label class="control-label"  for="Address" > Address: <h5><?php echo $a; ?></h5>
</div>
</div>
<div class="controls">
<div class="control-group">
<!-- Phone -->
<label class="control-label"  for="Phone"> Phone: <h5><?php echo $p; ?></h5>
<div class="controls">
</div>
</div>
</div>
</div>
</div>
<div class="control-group">
<!-- Button -->
<div class="controls">
<button style="font-size : 20px; width: 30%; height: 30px;" onClick="parent.location='main.php'">Back</button>
</div>
</div>

</font>
</center>

</body>