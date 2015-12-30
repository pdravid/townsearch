<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include('head.php'); 
	
	?>
	

<?php include('functions.php'); ?>


  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>TS CLIENT PORTAL</b></a>
            <!--logo end-->
			<?php 
if($user_level ==1){ ?>
	 <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="admin.php">Admin Panel</a></li>
            	</ul>
            </div>

<?php }?>
            <?php 
			if(loggedin()){ ?>
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="logout.php">Logout</a></li>
            	</ul>
            </div>
			
			<?php }else{ ?>
				 <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.php">Login</a></li>
            	</ul>
            </div>
				
			<?php } ?>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
	  <?php
		 $result = mysqli_query($con,"SELECT * FROM search where mobno='$user_mobno' ");
		 $row=mysqli_fetch_array($result);
	  ?>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="assets/img/ui-sam.jpg" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $row['shopnm']; ?></h5>
              	  	
                  <li class="mt">
                      <a href="viewpage.php">
                          <i class="fa fa-dashboard"></i>
                          <span>View Page</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-desktop"></i>
                          <span>Advertise Image</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="general.html">General</a></li>
                          <li><a  href="buttons.html">Buttons</a></li>
                          <li><a  href="panels.html">Panels</a></li>
                      </ul>-->
                  </li>

                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-cogs"></i>
                          <span>Shop Image</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="calendar.html">Calendar</a></li>
                          <li><a  href="gallery.html">Gallery</a></li>
                          <li><a  href="todo_list.html">Todo List</a></li>
                      </ul>-->
                  </li>
                  <li class="sub-menu">
                      <a  href="#" >
                          <i class="fa fa-book"></i>
                          <span>Shop Details</span>
                      </a>
                      <!--<ul class="sub">
                          <li class="active"><a  href="blank.html">Blank Page</a></li>
                          <li><a  href="login.html">Login</a></li>
                          <li><a  href="lock_screen.html">Lock Screen</a></li>
                      </ul>-->
                  </li>
                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-tasks"></i>
                          <span>Shop Address</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="form_component.html">Form Components</a></li>
                      </ul>-->
                  </li>
                  <li class="sub-menu">
                      <a href="#" >
                          <i class="fa fa-th"></i>
                          <span>Services</span>
                      </a>
                      <!--<ul class="sub">
                          <li><a  href="basic_table.html">Basic Table</a></li>
                          <li><a  href="responsive_table.html">Responsive Table</a></li>
                      </ul>-->
                  </li>
                  <li class="sub-menu">
                      <a href="#" >
                          <i class=" fa fa-bar-chart-o"></i>
                          <span>Image Gallery</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="#">First Image</a></li>
                          <li><a  href="#">Second Image</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
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
if($user_level!=1){
	
	header('location: blank.php');
}
?>

<p>

<a href='admin.php?type=user'><button type="button" class="btn btn-theme04">User Settings</button></a>
</p>

<p>
<?php
if(isset($_GET['type']) && !empty($_GET['type']) ){
?>
<table class="table table-striped table-advance table-hover">
<tr><td width="150px">Users</td><td>Options</td><td>Contact Number</td><td>Zone Name</td></tr>
<?php
$list_query=mysqli_query($con,"select * from users");
while($run_list=mysqli_fetch_array($list_query)){
		$u_id=$run_list['id'];
		$u_username=$run_list['username'];
		$u_type=$run_list['type'];
		$u_mobno=$run_list['mobno'];
		$zone_query=mysqli_query($con,"select zid from search where mobno='$u_mobno' ");
		$run_zone=mysqli_fetch_array($zone_query);
		$u_zid=$run_zone['zid'];
		$zone_name_query=mysqli_query($con,"select zonenm from zone where zid='$u_zid'");
		$run_name_query=mysqli_fetch_array($zone_name_query);
		$u_zonenm=$run_name_query['zonenm'];
?>
<tr><td><?php echo $u_username; ?></td><td>
<?php
if($u_type=='a'){
	echo "<a href='option.php?u_id=$u_id&type=$u_type'>Deactivate account</a>";
}else{
	echo "<a href='option.php?u_id=$u_id&type=$u_type'>Activate account</a>";
}

?>
</td>
<td>
<?php
echo $u_mobno;
?>
</td>
<td>
<?php
echo $u_zonenm;
?>
</td>
</tr>
<?php
}
?>
</table>
<?php	
}else{
	echo "Select Options above";
}
?>
</p>

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
