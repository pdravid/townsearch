<?php
include('connection.php');
// get the q parameter from URL
$searchkey=$_REQUEST["key"];
$zid=$_REQUEST["zone"];
 $hint="";
 if($zid==null){	
	$result = mysqli_query($con,"SELECT * FROM search where mdata like '%$searchkey%' ");
}
else{
	$result = mysqli_query($con,"SELECT * FROM search where mdata like '%$searchkey%' AND zid=$zid ");	
}
$cnt=0;
 while($row = mysqli_fetch_array($result)){
	$zid=$row['zid'];
	$result3 = mysqli_query($con,"SELECT * FROM zone  where zid='$zid'");
	$row3 = mysqli_fetch_array($result3);
	?>
	<div class="media wow fadeInDown" style="background-color:#fff;border-radius:8px;">
        <div class="col-md-12 col-sm-6">	
			<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="pull-left">
					<a href="#"><img class="media-object" src="theme/<?php echo $row['shoplogo'];?>" height="130px" style="margin-right:30px;width:150px;" alt=""></a>
				</div>
				<a href="landing.php?menu=<?php echo $row['mobno']; ?>" ><h2 style="color:#000;font-size:28px;"><?php echo $row['shopnm'] ?></h2></a>
				<i class="fa fa-home"> &nbsp &nbsp </i><?php echo $row['shopadd'] ?>
				<h5>Rating: &nbsp &nbsp <img src="images/<?php echo $row['rating']%5+1; ?>.png" height="20px"></h5>
				<h5>Verified: &nbsp &nbsp <img src="images/<?php if($row['verified']=='1'){
									echo 'v.png';
									}else{
										echo 'nv.png';
									}?>" height="20px"></h5>
				<div class="btn-group">
					<button class="btn btn-primary" style="border-right:2px solid white;background-color:#222"><?php echo $row['spl']; ?></button>
					<button class="btn btn-primary" style="border-right:2px solid white;"><?php echo $row3['zonenm'];?></button>
					<button class="btn btn-primary" style="border-right:2px solid white;background-color:gray;"><a href="#openModa<?php echo $row['mobno'];?>" style="color:#fff;">View Contact</a></button>
					<button class="btn btn-primary" style="border-right:2px solid white;"><a href="#openMod<?php echo $row['mobno'];?>" style="color:#fff;">Get Email</a></button>
					<button class="btn btn-primary" style="background-color:#5cb85c;"><a href="#openoda<?php echo $row['mobno'];?>" style="color:#fff;">Get WhatsApp</a></button>
				</div>
			</div>
		</div><!--/.col-lg-4 -->
    </div>
	
<div id="openModa<?php echo $row['mobno'];?>" class="modalDialog">
	<div >
		<a href="#close" title="Close" class="close">X</a>
		<div align="center">
		  <h2 style="color:#333;background:#ccc;font-size:24px;padding:5px;"><?php echo $row['shopnm']; ?></h2>
		  <h3 style="color:#fff;background:#ED6347;font-size:20px;padding:5px;">Mobile Number:</br><?php echo $row['mobno']; ?></h3><h3 style="color:#fff;background:#aaa;font-size:16px;padding:5px;">Address:</br><?php echo $row['shopadd']; ?></h3>
		  </br>
		</div>
	</div>
</div>
<div id="openMod<?php echo $row['mobno'];?>" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">X</a>
	<div align="center">
		<form action="<?php echo 'results.php';?>" method="post">
		  <h2 style="color:#333;background:#ccc;font-size:24px;padding:5px;"><?php echo $row['shopnm']; ?></h2>	
		  <input type="text" name="uname" placeholder="Enter Name" style="width:80%;"/></br></br>
		  <input type="email" name="mailid" placeholder="Email-ID" style="width:80%;"/></br></br>
		  <input type="submit"  name="smail" style="background:#ED6347;padding:10px 20px 10px 20px;color:#fff;" value="SEND MAIL"/></br>
		  </form>
	</div></div>
</div>
<div id="openoda<?php echo $row['mobno'];?>" class="modalDialog">
	<div><a href="#close" title="Close" class="close">X</a>
	<div align="center">
		<form action="<?php echo 'results.php';?>" method="post">
		  <h2 style="color:#333;background:#ccc;font-size:24px;padding:5px;"><?php echo $row['shopnm']; ?></h2>	
		  <input type="text" name="uname" placeholder="Enter Name" style="width:80%;"/></br></br>
		  <input type="number" name="mobnum" placeholder="Enter Whats App Num" style="width:80%;"/></br></br>
		  <input type="submit" name="wapp" style="background:#5cb85c;padding:10px 20px 10px 20px;color:#fff;"  value="GET WHATS APP"/></br></br>
		  </form>
	</div></div>
</div>
<?php  $cnt++; } 
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
<script src="js/jquery.js"></script>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>