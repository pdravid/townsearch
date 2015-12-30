<?php
include('connection.php');
// get the q parameter from URL
$q=$_REQUEST["q"];
 $hint="";
$q=strtolower($q);
$result1 = mysqli_query($con,"SELECT * FROM search where mdata like '%$q%' ");
 $len=strlen($q);$cnt=3;
while($row = mysqli_fetch_array($result1))
{    
	if ($cnt>0) {
      if ($hint==="") {
        $hint="<input type='text' class='input-medium search-query' style='width:100%;height:42px;font-size:14px;border-radius:5px;' name='search' onkeyup='showHint(this.value)' placeholder='".$row['shopnm']." ".$row['spl']."' disabled/>";
		$cnt--;
      } else {
        $hint .= "</br><input type='text' class='input-medium search-query' style='width:100%;height:42px;font-size:14px;border-radius:5px;' name='search' onkeyup='showHint(this.value)' placeholder='".$row['shopnm']." ".$row['spl']."' disabled/>"; $cnt--;
      }
    }
}
echo $hint==="" ? "<input type='text' class='input-medium search-query' style='width:100%;height:42px;font-size:14px;border-radius:5px;' name='search' onkeyup='showHint(this.value)' placeholder='No result Found' disabled/> " : $hint;
?>
