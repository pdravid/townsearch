<?php 
			
  $result = mysqli_query($con,"SELECT * FROM search where mdata like '%$searchkey%' ");
						 while($row = mysqli_fetch_array($result)){
				   ?>
					<div class="media wow fadeInDown" style="background-color:#fff;border-radius:8px;">
                        <div class="col-md-12 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
						
								<div class="pull-left">
									<a href="#"><img class="media-object" src="images/vcs.png" height="130px" alt=""></a>
								</div>
									<a href="landing.php?menu=<?php echo $row['mobno']; ?>" ><h2 style="color:#000;font-size:28px;"><?php echo $row['shopnm'] ?></h2></a>
									<i class="fa fa-home"> &nbsp &nbsp </i><?php echo $row['shopadd'] ?>
									<h5>Rating: &nbsp &nbsp <img src="images/<?php echo $row['rating']%5+1; ?>.png" height="20px"></h5><h5>Verified: &nbsp &nbsp <img src="images/<?php if($row['verified']=='1'){
											echo 'v.png';
										
									}
									else{
										echo 'nv.png';
									}
									?>" height="20px"></h5>
									<div class="btn-group">
				<button class="btn btn-primary" style="border-right:2px solid white;"><?php echo $row['spl']; ?></button>
  <button class="btn btn-primary" style="border-right:2px solid white;">Zone Name</button>
  <button class="btn btn-primary"><?php echo $row['mobno']; ?></button>
</div>
								</div>
								
					</div><!--/.col-lg-4 -->
                    </div>
<?php } ?>