<?php
include_once("connect.php");

$title=$_REQUEST["title"];
$emb=$_REQUEST["emb"];
$descip=$_REQUEST["descip"];


$r=mysqli_query($con,"insert into big(title,emb,descip)values('$title','$emb','$descip')");


if($r==true){
	$msg="element added";
}
else{
	$msg="error while adding new product";
}

echo $msg;