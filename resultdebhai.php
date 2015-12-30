<?php
include('connection.php');
// get the q parameter from URL
$searchkey=$_REQUEST["key"];
$zid=$_REQUEST["zone"];
 $hint="";
 if($zid==null){	
	$result = mysqli_query($con,"SELECT * FROM search where mdata like '%$searchkey%' order by verified ");
}
else{
	$result = mysqli_query($con,"SELECT * FROM search where mdata like '%$searchkey%' AND zid=$zid order by verified");	
}
$cnt=0;
 while($row = mysqli_fetch_array($result)){
	$zid=$row['zid'];
	$result3 = mysqli_query($con,"SELECT * FROM zone  where zid='$zid'");
	$row3 = mysqli_fetch_array($result3);
	?>
        <div class="col-md-12 col-sm-6" style="background-color:#fff;border-radius:8px;box-shadow:2px 2px 2px  gray; margin-bottom:3px; ">	
			<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<div class="pull-left">
					<a href="#"><img class="media-object" src="theme/<?php echo $row['shoplogo'];?>" style="margin-right:30px;height:145px;width:160px;" alt=""></a>
				</div>
				<a href="landing.php?menu=<?php echo $row['mobno']; ?>" ><h2 style="color:#000;font-size:28px;"><?php echo $row['shopnm'] ?></h2></a>
				<i class="fa fa-home"> &nbsp &nbsp </i><?php echo $row['shopadd'] ?>
				<h5>Rating: &nbsp &nbsp <img src="images/<?php echo $row['rating']%5+1; ?>.png" height="20px"></h5>
				<h5>Verified: &nbsp &nbsp <img src="images/<?php if($row['verified']=='0'){
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
  
	
<div id="openModa<?php echo $row['mobno'];?>" class="modalDialog">
	<div >
		<a href="#close" title="Close" class="close">X</a>
		<div align="center">
		<form action="spllanding.php?menu=<?php echo $row['mobno']; ?>" method="post">
		  <h2 style="color:#333;background:#ccc;font-size:24px;padding:5px;"><?php echo $row['shopnm']; ?></h2>	
		  <input type="text" name="vname" placeholder="Enter Name" style="width:80%;" required/></br></br>
		  <input type="number" name="vmobno" placeholder="Enter Whats App Num" style="width:80%;" required/></br></br>
		  <input type="submit" name="submit1" style="background:#5cb85c;padding:10px 20px 10px 20px;color:#fff;"  value="GET SMS"/></br></br>
		  </form>
		</div>
	</div>
</div>
<div id="openMod<?php echo $row['mobno'];?>" class="modalDialog">
	<div>
	<a href="#close" title="Close" class="close">X</a>
	<div align="center">
		<form action="spllanding.php?menu=<?php echo $row['mobno']; ?>" method="post">
		  <h2 style="color:#333;background:#ccc;font-size:24px;padding:5px;"><?php echo $row['shopnm']; ?></h2>	
		  <input type="text" name="vname" placeholder="Enter Name" style="width:80%;" required/></br></br>
		  <input type="email" name="vmail" placeholder="Email-ID" style="width:80%;" required/></br></br>
		  <input type="submit"  name="submit2" style="background:#ED6347;padding:10px 20px 10px 20px;color:#fff;" value="SEND MAIL"/></br>
		  </form>
	</div></div>
</div>
<div id="openoda<?php echo $row['mobno'];?>" class="modalDialog">
	<div><a href="#close" title="Close" class="close">X</a>
	<div align="center">
		<form action="spllanding.php?menu=<?php echo $row['mobno']; ?>" method="post">
		  <h2 style="color:#333;background:#ccc;font-size:24px;padding:5px;"><?php echo $row['shopnm']; ?></h2>	
		  <input type="text" name="vname" placeholder="Enter Name" style="width:80%;" required/></br></br>
		  <input type="number" name="vmobno" placeholder="Enter Whats App Num" style="width:80%;" required/></br></br>
		  <input type="submit" name="submit3" style="background:#5cb85c;padding:10px 20px 10px 20px;color:#fff;"  value="GET WHATS APP"/></br></br>
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