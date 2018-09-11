<?php
include'connect.php';

$x=$_GET['id'];


$q=mysqli_query($con,"delete from big  where id ='$x'");

if($q==true){
	
	header("location:../new.php");
}
else{
	echo "<alert>'fail'</alert>";
}

