<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include('head.php'); 
	
	?>
	

<?php include('functions.php'); ?>
<?php
$result1 = mysqli_query($con,"SELECT * FROM rest  where mobno='$user_mobno'");
$row1 = mysqli_fetch_array($result1);
$result2 = mysqli_query($con,"SELECT * FROM search  where mobno='$user_mobno'");
$row2 = mysqli_fetch_array($result2);
$zid=$row2['zid'];
$result3 = mysqli_query($con,"SELECT * FROM zone  where zid='$zid'");
$row3 = mysqli_fetch_array($result3);
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
          	<h3><i class="fa fa-angle-right"></i> Your Page:</h3>
          	<div class="row mt">
          		<div class="col-lg-9">
          		
				
				<div class="container">
			<div class="media services-wrap wow fadeInDown">
			<div class="row">
			<div class="col-sm-6 col-md-10">
					<div class="media services-wrap wow fadeInDown" style=" background-color:#fff;border-radius:8px;border: 1px solid #111; box-shadow:5px 5px 5px gray; ">
                        <div class="col-md-12 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						
								<div class="pull-left">
									<a href="#"><img class="media-object" src="<?php echo $row['shoplogo'];?>" height="170px" style="margin-right:30px;width:190px;" alt=""></a>
								</div>
									<h2 style="color:#000;font-size:28px;"><?php echo $row2['shopnm']; ?>
									<!--<a href="shoppdf.php?menu=<?php echo $row2['mobno']; ?>" class="btn btn-large btn-success"  style="float:right;font-size:18px;">Download PDF
									--></a></p></h2>
									<i class="fa fa-home"></i> <?php echo $row2['shopadd']; ?>
									<h5>Owner Name: &nbsp &nbsp <?php echo $row1['ownernm']; ?></h5>
									<h5>Email-ID: &nbsp &nbsp <?php echo $row1['mailid']; ?></h5>
									<h5>Rating: &nbsp &nbsp <img src="images/3.png" height="20px"></h5>
									<h5>Townsearch verified: &nbsp &nbsp &nbsp <img src="images/v.png" height="20px" ></h5>
					<div class="btn-group">
							<button class="btn btn-primary" style="border-right:2px solid white;"><?php echo $row2['spl']; ?></button>
						<button class="btn btn-primary" style="border-right:2px solid white;"><?php echo $row3['zonenm']; ?></button>
						<button class="btn btn-primary">Mobile Number: <?php echo $row2['mobno']; ?></button>
					</div>
					<div class="skill-wrap clearfix">
			<div class="divide" align="center" ><hr>
			<img src='<?php echo $row1['discimg']; ?>' style="height:180px;" /></div>
			<div class="divide"><hr></div>
				<div class="center wow fadeInDown">
					<h2>Our Services</h2>
					<p class="lead"><?php echo $row1['serv']; ?></p>
				</div>
			</div>
			<div class="divide"><hr></div>
				<div id="about-slider">
				<div id="carousel-slider" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
				  	<ol class="carousel-indicators visible-xs">
					    <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
					    <li data-target="#carousel-slider" data-slide-to="1"></li>
					    <li data-target="#carousel-slider" data-slide-to="2"></li>
				  	</ol>

					<div class="carousel-inner" align="center">
						<div class="item active">
							<img src="<?php echo $row1['img1']?>" class="img-responsive" alt="" style=" height:300px;"> 
					   </div>
					   <div class="item">
							<img src="<?php echo $row1['img2']?>" class="img-responsive" alt="" style="height:300px;"> 
					   </div> 
					   <div class="item">
							<img src="<?php echo $row1['img3']?>" class="img-responsive" alt="" style="height:300px;"> 
					   </div> 
					</div>
					
					<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
						<i class="fa fa-angle-left"></i> 
					</a>
					
					<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
						<i class="fa fa-angle-right"></i> 
					</a>
				</div> <!--/#carousel-slider-->
			</div><!--/#about-slider-->
			
		</div><!--/.container-->	
					</div><!--/.col-lg-4 -->
                    </div>
                </div>       
				</div>
			</div>	
         </div><!--/.our-skill-->
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
