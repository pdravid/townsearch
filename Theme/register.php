<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include('head.php'); ?>

  <body>
	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post" action="register.php" enctype="multipart/form-data">
		        <h2 class="form-login-heading">Register Now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" placeholder="Username" name="username" autofocus>
		            <br>
		            <input type="password" class="form-control" name="password" placeholder="Password"><br>
		            <input type="text" class="form-control" placeholder="Mobile Number" name="mobno">
		            <br>
					<input type="text" class="form-control" placeholder="Shop Name" name="shopnm">
		            <br>
					<select name="category" class="form-control">
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
			<select name="zone" class="form-control">
  <option value="Vijapur Road">Vijapur Road</option>
  <option value="Hotgi Road">Hotgi Road</option>
  <option value="Center City">Center City</option>
  <option value="Railway Station">Railway Station</option>
  <option value="Shivaji Chowk">Shivaji Chowk</option>
  <option value="Shelagi zone">Shelagi zone</option>
  <option value="Tilak Chowk">Tilak Chowk</option>
  <option value="Ashok Chowk">Ashok Chowk</option>
</select><br>		
					
					<textarea type="text" class="form-control" placeholder="Shop Address" name="shopadd"></textarea>
		            <br>
					
					<input type="text" class="form-control" placeholder="Specialization" name="spl">
		            <br>
					
					<input type="file" class="form-control" name="shoplogo">
		            <br>
					
		            <button class="btn btn-theme btn-block"  type="submit" name="submit" ><i class="fa fa-lock"></i> SIGN UP!</button>
					
		            
		            
		           
		            
		
		        </div>
		
		          <!-- Modal -->
		         
		          <!-- modal -->
		
		      </form>
<?php

if(isset($_POST['submit'])){
	 $username=$_POST['username'];
	 $password=md5($_POST['password']);
	 $mobno=$_POST['mobno'];
	 $shopnm=$_POST['shopnm'];
	 $category=$_POST['category'];
	 $result=mysqli_query($con,"select cid from category where categorynm='$category'");
	 $rowc=mysqli_fetch_array($result);
	 $cid=$rowc['cid'];
	 $zone=$_POST['zone'];
	 $resultz=mysqli_query($con,"select zid from zone where zonenm='$zone'");
	 $rowz=mysqli_fetch_array($resultz);
	 $zid=$rowz['zid'];
	 $shopadd=$_POST['shopadd'];
	 $spl=$_POST['spl'];
	 $shoplogo=$_FILES['shoplogo']['name'];
	 $image_tmp=$_FILES['shoplogo']['tmp_name'];
     //$spl=$_POST['spl'];
     $mdata=$shopnm." ".$shopadd." ";
	

	move_uploaded_file($image_tmp,"images/$shoplogo");
	$insert_query = "insert into search(mobno,shopnm,cid,zid,shopadd,rating,verified,shoplogo,mdata,spl) values('$mobno','$shopnm','$cid','$zid','$shopadd','$rating','$verified','images/$shoplogo','$mdata','$spl')";
	mysqli_query($con,"insert into users(id,mobno,username,password,user_level,type) values('','$mobno','$username','$password','2','a')");
	mysqli_query($con,"insert into rest(img1,img2,img3,img4,img5,discimg,serv,ownernm,mobno,mailid) values('','','','','','','','','$mobno','' )");
	if(mysqli_query($con,$insert_query)){
		echo "Success!";
	}
}
?>			  
	  	
	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>