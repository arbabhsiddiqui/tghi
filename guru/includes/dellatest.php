<?php
include'connect.php';

$x=$_GET['Id'];


$q=mysqli_query($con,"delete from latest  where id ='$x'");

if($q==true){
	
	header("location:../latest.php");
}
else{
	echo "<alert>'fail'</alert>";
}

