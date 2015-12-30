<?php include('connect.php'); ?>
<?php include('head.php'); ?>

<?php include('functions.php'); ?>
<script>
function catsel(str){
	var  xmlhttp=new XMLHttpRequest();
	xmlhttp.onreadystatechange=function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
		}	
	}
	xmlhttp.open("GET","updatecat.php?q="+str,true);
	xmlhttp.send();
}
</script>
<!DOCTYPE html>
<html lang="en">

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
     <?php include('header.php'); ?>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <?php include('sidebar.php'); ?>
      <!--sidebar end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
	   <?php

if(isset($_POST['submit'])){
	
	$shopnm=$_POST['shopnm'];
	$shopadd=$_POST['shopadd'];
	//$cat=$_POST['pushi'];
	//$spl=$_POST['spl'];
	//move_uploaded_file($image_tmp,"images/$shoplogo");
	mysqli_query($con,"update search set shopadd='$shopadd' where mobno='$user_mobno'");
	$insert_query = "update search set shopnm='$shopnm' where mobno='$user_mobno'";
	//mysqli_query($con,"insert into users(id,mobno,username,password,user_level,type) values('','$mobno','$username','$password','2','a')");
	if(mysqli_query($con,$insert_query)){
		//echo "Success!";
	}

	}
	?>
	  
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Blank Page</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<?php
					$ad_query=mysqli_query($con,"select * from search where mobno='$user_mobno'");
					$run_ad=mysqli_fetch_array($ad_query);
					
				?>
				<p>Your current shop details are as follows :</p><br>
				<form method="post" action="shopdet.php">
				Shop Name:<input type="text"name="shopnm" class="form-control" placeholder="<?php echo $run_ad['shopnm']; ?>"><br>
				Shop Address:<input type="text" name="shopadd" class="form-control" placeholder="<?php echo $run_ad['shopadd']; ?>"><br>
				<button class="btn btn-theme btn-block"  type="submit" name="submit" style="width:200px;" ><i class="fa fa-lock" ></i> Update your services</button>
				</form>
				
				<form>
<h2>Select Category:</h2><select name="categ"  style="width:300px;height:30px;" onchange="catsel(this.value)"  >

<?php
$sql="SELECT * FROM CATEGORY GROUP BY categorynm";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result)){
	echo "<option name='pushi'>".$row['categorynm']."</option>";
}
?>
</select>
</form>
<span id="txtHint" > </span>
          		</div>
          	</div>
			
		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
