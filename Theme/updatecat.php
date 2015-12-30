<?php include 'connect.php';
	$q=$_REQUEST["q"];
	echo $q;
	echo "<br><h2>Specialization:</h2><select name='spl' style=width:300px;height:30px;>";
	$sql="SELECT spl FROM CATEGORY  where categorynm = '$q' " ;
	$result=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($result)){
		echo $row['spl'];
		echo "<option>".$row['spl']."</option>";
	}
	echo "</select>"
	//$sql1="UPDATE search set cid=	"
?>
<?php
	/*
	}*/
?>	
