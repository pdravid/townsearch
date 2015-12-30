<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); ?>
<body >
<?php include('header.php') ?>
       
<section id="services" class="service-item" style="height:550px;">
	   <div class="container">
            <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" align="center">
	<img src="images/prude3.png" style="width:82%;height:103px;"/></br></br>
	<form method="post" class="form-search" action="imageresult.php">
		<input type="text" class="input-medium search-query" style="width:100%;height:45px;font-size:16px;border-radius:5px;" name="search"  placeholder=" Search anything,anywhere in Solapur..." />
		<button type="submit" class="btn btn-primary" style="min-width:150px;font-size:16px;">+IMAGE SEARCH</button></br>
		
	</form>
</div>
                

                                                          
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#services-->

    <?php include('footer.php'); ?>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>