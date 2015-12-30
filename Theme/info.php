<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include('head.php'); 
	
	?>
	

<?php include('functions.php'); ?>

<?php

if(isset($_POST['submit'])){
	 /*$username=$_POST['username'];
	 $password=md5($_POST['password']);
	 $mobno=$_POST['mobno'];
	 */
	 $ownernm=$_POST['owner'];
	 $mailid=$_POST['mail'];
	 //$zid=$_POST['zid'];/*
	 /*$shopadd=$_POST['shopadd'];
	 $rating=$_POST['rating'];
	 $verified=$_POST['verified'];*/
	 //$shoplogo=$_FILES['shoplogo']['name'];
	 //$image_tmp=$_FILES['shoplogo']['tmp_name'];
     //$spl=$_POST['spl'];
     //$mdata=$shopnm." ".$shopadd." ";
	

	//move_uploaded_file($image_tmp,"images/$shoplogo");
	$insert_query = "update rest set ownernm='$ownernm' where mobno='$user_mobno'";
	mysqli_query($con,"update rest set mailid='$mailid' where mobno='$user_mobno'");
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
          		<div class="col-lg-9" style="background:#fff;box-shadow:5px 5px 5px 2px;gray;border-radius:5px;margin-left:10px;">
                        <h3><i class="fa fa-angle-right"></i> Personal Information </h3>
          		<?php
					$ad_query=mysqli_query($con,"select ownernm,mailid from rest where mobno='$user_mobno'");
					$run_ad=mysqli_fetch_array($ad_query);
					
				?>
				
				
				<form method="post" action="info.php"><br>
				<input type="text" class="form-control" name="owner" placeholder="<?php echo $run_ad['ownernm']; ?>"><br>
				<input type="text" class="form-control" name="mail" placeholder="<?php echo $run_ad['mailid']; ?>"><br>
					
		            <button class="btn btn-theme btn-block"  type="submit" name="submit" style="width:200px;" ><i class="fa fa-lock" ></i> Update Information</button></br></br>
				</form>
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
