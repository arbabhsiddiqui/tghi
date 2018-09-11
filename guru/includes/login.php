<?php

include_once("connect.php");

$id=$_REQUEST["id"];
$id=str_replace("'","''",$_REQUEST['id']);


$pwd=$_REQUEST["pwd"];
$pwd=str_replace("'","''",$_REQUEST['pwd']);



$r=mysqli_query($con,"select * from admin where email='$id'and pwd='$pwd'");

if(mysqli_num_rows($r)>0){
	$msg="login";
	session_start();
	$_SESSION["id"]=$id;
}
else{
	$msg="invalid user";
}

echo $msg;