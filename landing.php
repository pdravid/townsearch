<?php include('connection.php'); ?>
<?php
$tab=filter_input(INPUT_GET,"menu");
$result1 = mysqli_query($con,"SELECT * FROM rest  where mobno='$tab'");
$row1 = mysqli_fetch_array($result1);
$result2 = mysqli_query($con,"SELECT * FROM search  where mobno='$tab'");
$row2 = mysqli_fetch_array($result2);
$zid=$row2['zid'];
$result3 = mysqli_query($con,"SELECT * FROM zone  where zid='$zid'");
$row3 = mysqli_fetch_array($result3);
?>
<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>

<body>

    <?php include('header.php'); ?>


     
			<div class="row"  style="padding-top:10px;" >
                         <div class="col-sm-6 col-md-1" ></div>
			<div class="col-sm-6 col-md-10" >
					<div class="media services-wrap wow fadeInDown" style=" background-color:#fff;border-radius:8px;border: 1px solid #111; box-shadow:5px 5px 5px gray;padding:4px 3px 4px 3px; ">
                        <div class="col-md-12 col-sm-6" style="margin-top:12px;">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms" >
						
								<div class="pull-left">
									<a href="#"><img class="media-object" src="theme/<?php echo $row2['shoplogo']; ?>"  style="margin-top:25px;height:220px;width:230px;" alt=""></a>
								</div>
									<h2 style="color:#000;font-size:28px;"><?php echo $row2['shopnm']; ?>
									<a href="javascript:window.print()" class="btn btn-large btn-success"  style="float:right;font-size:18px;">Download PDF
									</a></p></h2>
									<i class="fa fa-home"></i> <?php echo $row2['shopadd']; ?>
									<h5>Owner Name: &nbsp &nbsp <?php echo $row1['ownernm']; ?></h5>
									<h5>Email-ID: &nbsp &nbsp <?php echo $row1['mailid']; ?></h5>
									<h5>Rating: &nbsp &nbsp <img src="images/3.png" height="20px"></h5>
									<h5>Townsearch verified: &nbsp &nbsp &nbsp <img src="images/v.png" height="20px" ></h5>
					<div class="btn-group">
						<button class="btn btn-primary" style="border-right:2px solid white;"><?php echo $row2['spl']; ?></button>
						<button class="btn btn-primary" style="border-right:2px solid white;"><?php echo $row3['zonenm']; ?></button>
						<button class="btn btn-primary">Contact Number</button>
					</div>
					<div class="skill-wrap clearfix">
			<div class="divide" align="center" ><hr>
			<img src="theme/<?php echo $row1['discimg'];?>" style="height:240px;" /></div>
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
							<img src="theme/<?php echo $row1['img1'];?>" style="height:270px;" class="img-responsive" alt=""> 
					   </div>
					   <div class="item">
							<img src="theme/<?php echo $row1['img2'];?>" style="height:270px;" class="img-responsive" alt=""> 
					   </div> 
					   <div class="item">
							<img src="theme/<?php echo $row1['img3'];?>" style="height:270px;" class="img-responsive" alt=""> 
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
	</section><!--/about-us-->
    <?php include('footer.php'); ?>
    

    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $('.carousel').carousel()
    </script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>