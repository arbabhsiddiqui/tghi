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
        <script src="js/addmaster.js"></script>
        
       
    <title>the guitar hero institution</title>
  </head>
  <body>
    <?php
	  session_start();
	  if(!isset($_SESSION["id"])){
		header("location:index.php");	
	  	  
	  }
	  else{
		  include_once("adminheader.php");
	  
	  }
	  ?>
	  
<section class="course pt-5 pb-5">
<div class="container">
	<div class="row">
	<div class="col-sm-12 text-center">
	<h3>Add New Items In Advance Video Section</h3>
		<div class="row">
			<div class="col-sm-6 pt-5">
				<table class="table">
					<thead>
						<th>Sno</th>
						<th>Title</th>
					<th>Description</th>
						<th>Delete</th>
					</thead>
					<tbody>
					<?php
						include_once("includes/connect.php");
						$s=mysqli_query($con,"select * from  master");
						$i=0;
						while($row=mysqli_fetch_array($s)){
							$i++;
							?>
							<tr>
								<td><?php echo $i?></td>
								<td><?php echo $row['title']?></td>
								<td><?php echo $row['descip']?></td>
								<form method="post">
								<td>
									<?php
									$id=$row['id'];
									echo "<a href='includes/delmaster.php?id=$id' class='btn btn-danger'>x</a>"
									?>
								</td>
								</form>
							</tr>
							<?php
							
						}
						?>
						
					</tbody>
					<tfooter>
						<tr></tr>
					</tfooter>
				</table>
			</div>
			<div class="col-sm-6 pt-5">
				<form method="post">
					<div class="row">
						<div class="col-sm-12"><input type="text" class="form-control" id="title" placeholder="enter video title"></div>
					</div>
					<div class="row pt-1">
						<div class="col-sm-12"><input type="text" class="form-control" id="emb" placeholder="enter youtube video link"></div>
					</div>
					<div class="row pt-1">
						<div class="col-sm-12"><input type="text" class="form-control" id="descip" placeholder="video description"></div>
					</div>
					<div class="row pt-1">
						<div class="col-sm-10"></div>
						<div class="col-sm-2">
							<input type="button" onclick="addlatest()" value="add" class="btn btn-danger">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	</div>
</div>   
       















</section>

 <?php
	  include_once("footer.php");
	  ?>


  </body>
</html>



