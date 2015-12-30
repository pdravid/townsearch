<?php include('connect.php'); ?>
<?php include('head.php'); ?>
<?php include('functions.php'); ?>
<!DOCTYPE html>
<html lang="en">
<link href="bootstrap.min.css" rel="stylesheet">
        <link href="fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="jquery.min.js"></script>
        <script src="fileinput.js" type="text/javascript"></script>
        <script src="bootstrap.min.js" type="text/javascript"></script>

<?php

if(isset($_POST['submit'])){
	 /*$username=$_POST['username'];
	 $password=md5($_POST['password']);
	 $mobno=$_POST['mobno'];
	 $shopnm=$_POST['shopnm'];
	 $cid=$_POST['cid'];
	 $zid=$_POST['zid'];
	 $shopadd=$_POST['shopadd'];
	 $rating=$_POST['rating'];
	 $verified=$_POST['verified'];*/
	 $shoplogo=$_FILES['shoplogo']['name'];
	 $image_tmp=$_FILES['shoplogo']['tmp_name'];
     //$spl=$_POST['spl'];
     //$mdata=$shopnm." ".$shopadd." ";
	

	move_uploaded_file($image_tmp,"images/$shoplogo");
	$insert_query = "update search set shoplogo='images/$shoplogo' where mobno='$user_mobno'";
	//mysqli_query($con,"insert into users(id,mobno,username,password,user_level,type) values('','$mobno','$username','$password','2','a')");
	if(mysqli_query($con,$insert_query)){
		//echo "Success!";
	}
}
?>
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
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<div class="row mt">
          		<div class="col-lg-9" style="box-shadow:5px 5px 5px 2px;gray;border-radius:5px;margin-left:10px;">
                              <h3><i class="fa fa-angle-right"></i>Shop Logo/Image</h3></br>
          		<?php
					$ad_query=mysqli_query($con,"select shoplogo from search where mobno='$user_mobno'");
					$run_ad=mysqli_fetch_array($ad_query);
					
				?>
				<img src="<?php echo $run_ad['shoplogo']; ?>" height="160px" width="190px">
				<form method="post" action="shopimg.php" enctype="multipart/form-data"><br>
 <input id="file-0" class="file" type="file" name="shoplogo" style="width:400px;" multiple data-min-file-count="1">
                <br>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
				</form>
          		</div>
          	</div>
						  
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
