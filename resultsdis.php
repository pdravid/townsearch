<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); 
include('connection.php');
if(!isset($_POST['search']))
	$searchkey="";
else
  $searchkey=$_POST['search'];
$searchkey = 'ed';
?>
<script>
function showHint(str,str2) {
  if (str.length==0) { 
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","resultdebhai.php?key="+str+"&zone="+str2,true);
  xmlhttp.send();
}
</script>

<body onload="showHint('<?php echo $searchkey;?>','')">
<?php include('header.php') ?>
<section id="services" class="service-item" style="min-height:520px;"  >
	   <div class="container">
            <div class="row" >

                <div class="col-sm-6 col-md-3" style="margin-left:0px;height:100px;">
					
					<div class="btn-group btn-group-vertical" >
                        <button class="btn" style="width:100%;font-size:20px;padding:5px 70px 5px 70px;" >ZONES</button>
						<?php
						$result5 = mysqli_query($con,"SELECT * FROM zone");
					while($row5=mysqli_fetch_array($result5)){?>
				<button class="btn btn-primary"  onclick="showHint('<?php echo $searchkey;?>','<?php echo $row5[0];?>')" style="width:100%;font-size:18px;border-bottom:2px solid white;"><?php echo $row5[1];?></button>
						<?php } ?>
					</div>
                </div>
				<div class="col-sm-6 col-md-9" id="content"  >
					<span id="txtHint"></span>
                </div>  <!-- content tag name-->          				
			</div><!--/.row-->
      </div><!--/.container-->
    </section><!--/#services-->

   <?php include('footer.php'); ?>

    <script src="js/jquery.js"></script>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>