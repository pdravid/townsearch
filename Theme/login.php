<?php include('connect.php'); ?>
<?php include('functions.php'); ?>
<?php 
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=md5($_POST['password']);
	
	
	
	if(!empty($username) && !empty($password)){
		$check_login=mysqli_query($con,"select id,type from users where username='$username' and password='$password'  ");
		
		
		
		if(mysqli_num_rows($check_login)==1) { 
			
			$run=mysqli_fetch_array($check_login);
			$user_id=$run['id'];
			$type=$run['type'];
			if($type!='d'){ 
				//echo $user_id;
				$_SESSION['user_id']=$user_id;
				//echo $user_id;
				session_start();
				header('location: blank.php');
			}else{
				
				echo "deactivted ahe na bhau";
		}
			
			
			
			
		}else{
			echo "Username or password is incorrect";
		}
	
	
		
	}else{
		
		
		
		echo "<p>Fields empty!</p>";
		
	}
	
	
	
	
	
	
}
else{
		//echo "Kuch to gadbad hai !";
		
}
?>
<!DOCTYPE html>
<html lang="en">
  <?php include('head.php'); ?>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">
	  	
		      <form class="form-login" method="post">
		        <h2 class="form-login-heading">sign in now</h2>
		        <div class="login-wrap">
		            <input type="text" class="form-control" name="username" placeholder="Username" autofocus>
		            <br>
		            <input type="password" class="form-control" name="password" placeholder="Password">
		            <label class="checkbox">
		                <span class="pull-right">
		                    <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
		
		                </span>
		            </label>
		            <button class="btn btn-theme btn-block" name="submit" type="submit"><i class="fa fa-lock"></i> SIGN IN</button>
		            
		            
		            <hr>
		            <div class="registration">
		                Don't have an account yet?<br/>
		                <a class="" href="register.php">
		                    Create an account
		                </a>
		            </div>
		
		        </div>
		
		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
		
		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button" name="submit">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->
		
		      </form>	  	
	  	
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