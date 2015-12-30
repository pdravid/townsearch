<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <?php include('head.php'); ?>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

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
					<input type="text" class="form-control" placeholder="Category ID" name="cid">
		            <br>
					<input type="text" class="form-control" placeholder="Zone ID" name="zid">
		            <br>
					<textarea type="text" class="form-control" placeholder="Shop Address" name="shopadd"></textarea>
		            <br>
					<input type="text" class="form-control" placeholder="Rating" name="rating">
		            <br>
					<input type="text" class="form-control" placeholder="Verified" name="verified">
		            <br>
					<!--<input type="text" class="form-control" placeholder="Speciality" name="spl">
		            <br>-->
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
	 $cid=$_POST['cid'];
	 $zid=$_POST['zid'];
	 $shopadd=$_POST['shopadd'];
	 $rating=$_POST['rating'];
	 $verified=$_POST['verified'];
	 $shoplogo=$_FILES['shoplogo']['name'];
	 $image_tmp=$_FILES['shoplogo']['tmp_name'];
     //$spl=$_POST['spl'];
     $mdata=$shopnm." ".$shopadd." ";
	

	move_uploaded_file($image_tmp,"images/$shoplogo");
	$insert_query = "insert into search(mobno,shopnm,cid,zid,shopadd,rating,verified,shoplogo,mdata,spl) values('$mobno','$shopnm','$cid','$zid','$shopadd','$rating','$verified','images/$shoplogo','$mdata','')";
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
