<!DOCTYPE html>
<html lang="en">
<?php include('head.php'); 
include('connection.php');
if(!isset($_POST['search']))
	$searchkey="";
else
  $searchkey=$_POST['search'];
?>

<body >
<?php include('header.php') ?>
<section id="services" class="service-item" style="min-height:520px;"  >
	   <div class="container">
            <div class="row" >
				<?php	$result = mysqli_query($con,"SELECT * FROM images where mdata like '%$searchkey%' ");
				 while($row = mysqli_fetch_array($result)){?>
				 
				<div  style="float:left;width:32%;padding:8px;background:#fff;border-radius:5px;margin-right:10px;margin-bottom:15px;" >
					<a class="btn btn-warning" href="#openModa<?php echo $row['img'];?>">
					<img src="<?php echo $row['img'];?>" style="width:100%;height:230px;"/>
					</a>
				 </div>
	<div id="openModa<?php echo $row['img'];?>" class="modalDialog" >

		
		  <div  style="margin-left:25%;width:50%;padding:8px;background:#fff;border-radius:5px;margin-right:10px;margin-bottom:15px;" >
			<a href="#close" title="Close" class="close">X</a>
					<img src="<?php echo $row['img'];?>" style="width:100%;height:350px;"/>
		</div>
		  </br>
</div>
				 <?php }?>
                </div>  <!-- content tag name-->          				
			</div><!--/.row-->
      </div><!--/.container-->
    </section><!--/#services-->

   <?php include('footer.php'); ?>

    <script src="js/jquery.js"></script>
	<script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>
</body>
</html>