<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="cat2.png">

    <title>Town-Search</title>

    <!-- Bootstrap core CSS -->
    <link href="Theme%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="Theme%20Template%20for%20Bootstrap_files/bootstrap-theme.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Theme%20Template%20for%20Bootstrap_files/theme.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="Theme%20Template%20for%20Bootstrap_files/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
<style>
#categories a img{

width:66px;
padding:5px;	
margin-left:6px;
}
#list li a img{
width:50px;
height:45px;
padding:5px;	
margin-left:3px;
}
#list li{
margin:3px 3px 3px 3px;
width:100px;float:left;
height:80px;
}
#list li h4{
font-size:13px;
font-weight:600;
}
#list ul li a{
font-size:14px;
font-weight:700;

}
.body{
	font-family:Adobe Hebrew;
}
</style>
<script>
function showHint(str) {
  if (str.length==0) { 
    document.getElementById("txtHint").innerHTML="";
    return;
  }
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onreadystatechange=function() {
    if (xmlhttp.readyState==4 && xmlhttp.status==200) {
      document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
  xmlhttp.open("GET","gethint.php?q="+str,true);
  xmlhttp.send();
}
</script>

  </head>

  <body role="document" style=" background-image: url("images/dark-tl.svg"), url("images/dark-tr.svg"), url("images/dark-bl.svg"), url("images/dark-br.svg")">

    <!-- Fixed navbar -->
    <?php
    include('head.php');
    ?>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" align="center"><br><br><img src="logox.jpg"style="width:70%;height:160px;"><br><br><br>
</div>
<div class="col-md-3"></div>
</div>
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" align="center">
	<form method="post" action="searchoutput.php"><form method="post" action="searchoutput.php"> 
		<input type="text"  style="width:70%;height:35px;" name="search" onkeyup="showHint(this.value)" placeholder=" Search anything,anywhere in Solapur..." />
		<button type="submit" class="btn btn-primary" style="min-width:150px;">Search</button></br>
		<span id="txtHint"></span>
	</form>
</div>
<div class="col-md-3"></div>
</div>
<br><br>

<div class="row">

<div class="col-md-3"> </div>

<div class="col-md-6" id="categories">
<a href="#"><img src="estate.png" ></a>
<a href="#"><img src="elec.png" ></a>
<a href="#"><img src="event.png" ></a>
<a href="#"><img src="hall.png" ></a>
<a href="#"><img src="hotel.png"></a>
<a href="#"><img src="auto.png" ></a>
<a href="#"><img src="food.png" ></a>
<a href="#"><img src="super.jpg" ></a>
<a href="#"><img src="fitness.png" ></a>
<a href="#"><img src="edu.png"></a>
<a href="#"><img src="industry.png" ></a>
<a href="#"><img src="print.png" ></a>
<a href="#"><img src="travel.png" ></a>
<a href="#"><img src="furniture.png" ></a>
<a href="#"><img src="software.png" ></a>
<a href="#"><img src="it.png" ></a>
</div>

<div class="col-md-3"></div>
</div>
</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	
	

	
    <script src="Theme%20Template%20for%20Bootstrap_files/jquery.js"></script>
    <script src="Theme%20Template%20for%20Bootstrap_files/bootstrap.js"></script>
    <script src="Theme%20Template%20for%20Bootstrap_files/docs.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="Theme%20Template%20for%20Bootstrap_files/ie10-viewport-bug-workaround.js"></script>
  
</body>
</html>
