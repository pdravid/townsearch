<?php include('connect.php'); ?>
<?php include('head.php'); ?>
<?php include('functions.php'); ?>
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
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Blank Page</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		<?php
					$ad_query=mysqli_query($con,"select * from visitor where shopno='$user_mobno'");
					
					
				?>
				<table class="table table-striped">
				<tr>
				<td>Visitor Name</td>
				<td>Visitor Email</td>
				<td>Visitor Contact Number</td>
				<td>Time</td>
				<td>Date</td>
				</tr>
				<?php while($run_ad=mysqli_fetch_array($ad_query)){ ?>
				<tr><td><?php echo $run_ad['vname']; ?></td>
				<td><?php echo $run_ad['vemail']; ?></td>
				<td><?php echo $run_ad['mobno']; ?></td>
				<td><?php echo $run_ad['time']; ?>	</td>
				<td><?php echo $run_ad['date']; ?>	</td>
				</tr>
				<?php }?>
				</table>
          			  
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
