<?php
include('connection.php');
// get the q parameter from URL
$searchkey=$_REQUEST["key"];
$zid=$_REQUEST["zone"];
 $hint="";
 ?>
<div  class="modalDialog">
	<div >
		<a href="#close" title="Close" class="close">X</a>
		<div align="center">
		 
<h2 style="color:#333;background:#ccc;font-size:24px;padding:5px;"><?php echo $zid; ?></h2>
<h3 style="color:#000;background:#ED6347;font-size:20px;padding:5px;">Mobile Number:<?php echo $searchkey; ?></h3>
<h3 style="color:#000;background:#aaa;font-size:16px;padding:5px;">Address:</br><?php echo "fhhhcx fyh";?></h3>
		  </br>
		</div>
	</div>
</div>