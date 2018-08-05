<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">

      <link rel="stylesheet" href="css/bootstrap.min.css">
      <link rel="stylesheet" href="css/gallery-grid.css">
       <link rel="stylesheet" href="css/style.css">
        <script src="js/login.js"></script>
       
    <title>the guitar hero institution</title>
  </head>
  <body>
    <?php
	  session_start();
	  if(!isset($_SESSION["id"])){
	include_once("header.php");
	  	  
	  }
	  else{
		  include_once("adminheader.php");
	  
	  }
	  ?>
	  
<section class="course pt-5 pb-5">
<div class="container">
	<div class="row">
	<div class="col-sm-12 text-center">
	<h3>welcome admin</h3>
		
	</div>
	</div>
</div>   
       















</section>

 <?php
	  include_once("footer.php");
	  ?>


  </body>
</html>



