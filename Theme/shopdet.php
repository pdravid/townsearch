<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include('head.php'); ?>
	

<?php include('functions.php'); ?>
 <?php

if(isset($_POST['submit'])){
	
	$shopnm=$_POST['shopnm'];
	$shopadd=$_POST['shopadd'];
	$category=$_POST['category'];
        $shopurl=$_POST['shopurl'];
	$spl=$_POST['spl'];
	//move_uploaded_file($image_tmp,"images/$shoplogo");
	mysqli_query($con,"update search set shopadd='$shopadd' where mobno='$user_mobno'");
        $catquery=mysqli_query($con,"select cid from category where categorynm='$category'");
        $catres=mysqli_fetch_array($catquery);
        $cid=$catres['cid'];
        mysqli_query($con,"update search set shopurl='$shopurl' where mobno='$user_mobno'");
        mysqli_query($con,"update search set cid='$cid' where mobno='$user_mobno'");
        mysqli_query($con,"update search set spl='$spl' where mobno='$user_mobno'");
	$insert_query = "update search set shopnm='$shopnm' where mobno='$user_mobno'";
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
          		<div class="col-lg-9" style="margin-left:10px;background:#fff;box-shadow:5px 5px 5px 2px;gray;border-radius:5px;">
                            <h3 style="font-size:24px; font-weight:600;"><i class="fa fa-angle-right"></i> Shop Details:</h3></br>
          		<?php
					$ad_query=mysqli_query($con,"select * from search where mobno='$user_mobno'");
					$run_ad=mysqli_fetch_array($ad_query);	
					
				?>
				
				<form method="post" action="shopdet.php">
				Shop Name:<input type="text"name="shopnm" class="form-control" placeholder="<?php echo $run_ad['shopnm']; ?>"><br>
				Shop Address:<input type="text" name="shopadd" class="form-control" placeholder="<?php echo $run_ad['shopadd']; ?>"><br>
				Shop Website:<input type="text" name="shopurl" class="form-control" placeholder="<?php echo $run_ad['shopurl']; ?>"><br>
Category:<select name="category" class="form-control">
  <option value="Real Estate">Real Estate</option>
  <option value="Education">Education</option>
  <option value="Hotels">Hotels</option>
  <option value="Event Management">Event Management</option>
  <option value="Multipurpose Halls">Multipurpose Halls</option>
  <option value="Elecrtonic Sales and Services">Electronics Sales and Services</option>
  <option value="Automobiles">Automobiles</option>
  <option value="Food Stores">Food Stores</option>
  <option value="Super Market Stores">Super Market Stores</option>
  <option value="Fitness">Fitness</option>
  <option value="Industries">Industries</option>
  <option value="Printing Services">Printing Services</option>
  <option value="Travel">Travel</option>
  <option value="Interior and Furniture">Interior and Furniture</option>
  <option value="IT Sales">IT Sales</option>
  <option value="Software Services">Software Services</option>
  <option value="Mobile Stores">Mobile Stores</option>
  <option value="Cloth Stores">Cloth Stores</option>
  <option value="Hospitals">Hospitals</option>
  <option value="Daily Needs">Daily Needs</option>
  <option value="Stationary">Stationary</option>
  <option value="Packers and Movers">Packers and Movers</option>
  
</select><br>
Specialisation:<input type="text"name="spl" class="form-control" placeholder="<?php echo $run_ad['spl']; ?>"><br>
				<button class="btn btn-theme btn-block"  type="submit" name="submit" style="width:200px;" ><i class="fa fa-lock" ></i> Update your services</button></br></br>
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