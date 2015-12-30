<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>
<script>
function showHint(str) {
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
  xmlhttp.open("GET","gethint.php?q="+str,true);
  xmlhttp.send();
}
</script>
<body >
<?php include('header.php') ?>
       
<section id="services" class="service-item" style="height:550px;">
	   <div class="container">
            <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" align="center">
	<img src="images/prude3.png" style="width:82%;height:103px;"/></br></br>
	<form method="post" class="form-search" action="results.php">
		<input type="text" class="input-medium search-query" style="width:100%;height:45px;font-size:16px;border-radius:5px;" name="search" onkeyup="showHint(this.value)" placeholder=" Search anything,anywhere in Solapur..." />
		<span id="txtHint"></span>
		<button type="submit" class="btn btn-primary" style="min-width:150px;font-size:16px;">+VIDEO SEARCH</button></br>
		
	</form>
</div>
                

                                                          
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <?php include('footer.php'); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>