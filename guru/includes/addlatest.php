<?php
include_once("connect.php");

$title=$_REQUEST["title"];
$emb=$_REQUEST["emb"];


$r=mysqli_query($con,"insert into latest(title,link)values('$title','$emb')");


if($r==true){
	$msg="element added";
}
else{
	$msg="error while adding new product";
}

echo $msg;