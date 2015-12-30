<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); 
include('connection.php');
if(!isset($_POST['search']))
	$searchkey="";
else
  $searchkey=$_POST['search'];
?>
<body >
<?php include('header.php') ?>
<section id="services" class="service-item" style="min-height:520px;"  >
	   <div class="container">
            <div class="row" >
				<div class="col-sm-6 col-md-8" id="content"  >
				
					<?php	
	$result = mysqli_query($con,"SELECT * FROM video where mdata like '%$searchkey%' ");
$cnt=0;
 //while($row = mysqli_fetch_array($result)){
	?>
	<div class="media wow fadeInDown" style="background-color:#fff;border-radius:8px;">
        <div class="col-md-12 col-sm-6" align="center">
			<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="btn-group" >
					<video width="580" height="340" controls autoplay>
						<source src="Theme\video\v1(2).mp4" type="video/mp4">
						Your browser does not support the video tag.
					</video>
					<h2 style="color:#222;">VIDEO_NAME</h2>
				</div>
			</div>
		</div><!--/.col-lg-4 -->
    </div>
<?php // $cnt++; } 
if($cnt==0){
?>
<div class="media wow fadeInDown" style="background-color:#fff;border-radius:8px;">
                        <div class="col-md-12 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						
								<h2 style="color:#000;font-size:28px;">No result found</h2>									
								</div>
								
					</div><!--/.col-lg-4 -->
                    </div>	
<?php	
}
?>
					<span id="txtHint"></span>
                </div>  <!-- content tag name-->    
				<div class="col-sm-6 col-md-2" style="margin-left:0px;height:100px;">
					
					<div class="btn-group btn-group-vertical" >
                        
					</div>
                </div>
				<div class="col-sm-6 col-md-2" style="margin-left:0px;height:100px;">
					
					<div class="btn-group btn-group-vertical" >
                        <button class="btn" style="width:100%;font-size:20px;padding:5px 70px 5px 70px;" >ZONES</button>
						<?php
						$result5 = mysqli_query($con,"SELECT * FROM zone");
					while($row5=mysqli_fetch_array($result5)){?>
				<button class="btn btn-primary"  onclick="showHint('<?php echo $searchkey;?>','<?php echo $row5[0];?>')" style="width:100%;font-size:18px;border-bottom:2px solid white;"><?php echo $row5[1];?></button>
						<?php } ?>
					</div>
                </div>
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