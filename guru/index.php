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
	  include_once("header.php");
	  ?>
	  
<section class="course pt-5 pb-5">
<div class="container">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6 text-center">
		<div class="row">
			<div class="col-sm-12 text-center">
				<h4>login
</h4>			</div>
		</div>
		<form method="post" class="form-group">
		<div class="row">
			<div class="col-sm-12">
				<input type="text"  id="jname" class="form-control" placeholder="userid">
			</div>
		</div>
		<div class="row pt-3">
			<div class="col-sm-12">
				<input type="password"  id="jpwd" class="form-control" placeholder="password">
			</div>
		</div>
		</form>
		<div class="row pt-3 pb-3">
			<div class="col-sm-12">
				<input type="button" onclick="login()"  class=" btn 	btn-index" value="login">
			</div>
		</div>
		
		</div>
		<div class="col-sm-3"></div>
	</div>
</div>   
       















</section>

 <?php
	  include_once("footer.php");
	  ?>


  </body>
</html>



