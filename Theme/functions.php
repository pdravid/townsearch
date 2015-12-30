<?php
function loggedin(){
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
	return true;
}
else{
	return false;
}

}

if(loggedin()){
	$my_id=$_SESSION['user_id'];
	$user_query=mysqli_query($con,"select username,user_level,mobno from users where id='$my_id' ");
	$run_user=mysqli_fetch_array($user_query);
	$username=$run_user['username'];
	$user_level=$run_user['user_level'];
	$user_mobno=$run_user['mobno'];
	$query_level=mysqli_query($con,"select * from search where mobno='$user_mobno'");
	$run_level=mysqli_fetch_array($query_level);
	$shopnm=$run_level['shopnm'];
	$shopadd=$run_level['shopadd'];
	$shoplogo=$run_level['shoplogo'];
	$rating=$run_level['rating'];
        $verified=$run_level['verified'];
	$spl=$run_level['spl'];
	//$query_level1=mysqli_query($con,"select name from search where mobno='$user_mobno'");
	//$run_level1=mysqli_fetch_array($query_level1);
	//$shopnm=$run_level1['shopnm'];
}

?>