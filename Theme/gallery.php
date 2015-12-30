<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
<link href="bootstrap.min.css" rel="stylesheet">
        <link href="fileinput.css" media="all" rel="stylesheet" type="text/css" />
        <script src="jquery.min.js"></script>
        <script src="fileinput.js" type="text/javascript"></script>
        <script src="bootstrap.min.js" type="text/javascript"></script>
<?php include('head.php'); ?>
<?php include('functions.php'); 
if(isset($_POST['submit1'])){
	 /*$username=$_POST['username'];
	 $password=md5($_POST['password']);
	 $mobno=$_POST['mobno'];
	 $shopnm=$_POST['shopnm'];
	 $cid=$_POST['cid'];
	 $zid=$_POST['zid'];
	 $shopadd=$_POST['shopadd'];
	 $rating=$_POST['rating'];
	 $verified=$_POST['verified'];*/
	 $shoplogo1=$_FILES['shoplogo1']['name'];
	 $image_tmp1=$_FILES['shoplogo1']['tmp_name'];
	/* $shoplogo2=$_FILES['shoplogo2']['name'];
	 $image_tmp2=$_FILES['shoplogo2']['tmp_name'];
	 $shoplogo3=$_FILES['shoplogo3']['name'];
	 $image_tmp3=$_FILES['shoplogo3']['tmp_name'];
     //$spl=$_POST['spl'];*/
     //$mdata=$shopnm." ".$shopadd." ";
	

	move_uploaded_file($image_tmp1,"images/$shoplogo1");
	//move_uploaded_file($image_tmp2,"images/$shoplogo2");
	//move_uploaded_file($image_tmp3,"images/$shoplogo3");
	$insert_query = "update rest set img1='images/$shoplogo1' where mobno='$user_mobno'";
	//mysqli_query($con,"update rest set img2='images/$shoplogo2' where mobno='$user_mobno'");
	//mysqli_query($con,"update rest set img3='images/$shoplogo3' where mobno='$user_mobno'");
	//mysqli_query($con,"insert into users(id,mobno,username,password,user_level,type) values('','$mobno','$username','$password','2','a')");
	if(mysqli_query($con,$insert_query)){
		//echo "Success!";
	}
}
if(isset($_POST['submit2'])){
	 /*$username=$_POST['username'];
	 $password=md5($_POST['password']);
	 $mobno=$_POST['mobno'];
	 $shopnm=$_POST['shopnm'];
	 $cid=$_POST['cid'];
	 $zid=$_POST['zid'];
	 $shopadd=$_POST['shopadd'];
	 $rating=$_POST['rating'];
	 $verified=$_POST['verified'];*/
	 //$shoplogo1=$_FILES['shoplogo1']['name'];
	 //$image_tmp1=$_FILES['shoplogo1']['tmp_name'];
	 $shoplogo2=$_FILES['shoplogo2']['name'];
	 $image_tmp2=$_FILES['shoplogo2']['tmp_name'];
	 //$shoplogo3=$_FILES['shoplogo3']['name'];
	 //$image_tmp3=$_FILES['shoplogo3']['tmp_name'];
     //$spl=$_POST['spl'];
     //$mdata=$shopnm." ".$shopadd." ";
	

	//move_uploaded_file($image_tmp1,"images/$shoplogo1");
	move_uploaded_file($image_tmp2,"images/$shoplogo2");
	//move_uploaded_file($image_tmp3,"images/$shoplogo3");
	$insert_query = "update rest set img2='images/$shoplogo2' where mobno='$user_mobno'";
	//mysqli_query($con,"update rest set img2='images/$shoplogo2' where mobno='$user_mobno'");
	//mysqli_query($con,"update rest set img3='images/$shoplogo3' where mobno='$user_mobno'");
	//mysqli_query($con,"insert into users(id,mobno,username,password,user_level,type) values('','$mobno','$username','$password','2','a')");
	if(mysqli_query($con,$insert_query)){
		//echo "Success!";
	}
}
if(isset($_POST['submit3'])){
	 /*$username=$_POST['username'];
	 $password=md5($_POST['password']);
	 $mobno=$_POST['mobno'];
	 $shopnm=$_POST['shopnm'];
	 $cid=$_POST['cid'];
	 $zid=$_POST['zid'];
	 $shopadd=$_POST['shopadd'];
	 $rating=$_POST['rating'];
	 $verified=$_POST['verified'];*/
	 /*$shoplogo1=$_FILES['shoplogo1']['name'];
	 $image_tmp1=$_FILES['shoplogo1']['tmp_name'];
	 $shoplogo2=$_FILES['shoplogo2']['name'];
	 $image_tmp2=$_FILES['shoplogo2']['tmp_name'];*/
	 $shoplogo3=$_FILES['shoplogo3']['name'];
	 $image_tmp3=$_FILES['shoplogo3']['tmp_name'];
     //$spl=$_POST['spl'];
     //$mdata=$shopnm." ".$shopadd." ";
	

	//move_uploaded_file($image_tmp1,"images/$shoplogo1");
	//move_uploaded_file($image_tmp2,"images/$shoplogo2");
	move_uploaded_file($image_tmp3,"images/$shoplogo3");
	$insert_query = "update rest set img3='images/$shoplogo3' where mobno='$user_mobno'";
	//mysqli_query($con,"update rest set img2='images/$shoplogo2' where mobno='$user_mobno'");
	//mysqli_query($con,"update rest set img3='images/$shoplogo3' where mobno='$user_mobno'");
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
          		<div class="col-lg-12" style="box-shadow:5px 5px 5px 2px;gray;border-radius:5px;margin-left:10px;">
          		<?php
					$ad_query=mysqli_query($con,"select img1,img2,img3 from rest where mobno='$user_mobno'");
					$run_ad=mysqli_fetch_array($ad_query);
					
				?>
				<div class="row">
				
				<div class="col-md-4">
				<form method="post" action="gallery.php" enctype="multipart/form-data">
				<img src="<?php echo $run_ad['img1']; ?>" width="280px" height="230px"><br></br>
				 <input id="file-0" class="file" type="file" name="shoplogo1" style="" multiple data-min-file-count="1">
                <br>
                <button type="submit" name="submit1" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
				</form></br></br>
				</div>
				<div class="col-md-4">
				<form method="post" action="gallery.php" enctype="multipart/form-data">
				<img src="<?php echo $run_ad['img2']; ?>" width="280px" height="230px"><br></br>
				<input id="file-0" class="file" type="file" name="shoplogo2" style="" multiple data-min-file-count="1">
                <br>
                <button type="submit" name="submit2" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
				</form></br></br>
				</div>
				<div class="col-md-4">
				<form method="post" action="gallery.php" enctype="multipart/form-data">
				<img src="<?php echo $run_ad['img3']; ?>" height="230px" width="280px"><br></br>
				<input id="file-0" class="file" type="file" name="shoplogo3" style="" multiple data-min-file-count="1">
                <br>
                <button type="submit" name="submit3" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-default">Reset</button>
				</form></br></br>
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
            © 2015 |Developed and Designed by Dattaprasad Mundada & Pushkar Dravid
              <a href="<?php echo $_SERVER['PHP_SELF']; ?>#" class="go-top">
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