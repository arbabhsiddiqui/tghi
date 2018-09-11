<?php
include("header.php");
include("guru/includes/connect.php");
?>
<section class="course">
<div class="container-fluid">
	<div class="container">
	<?php 
		$s=mysqli_query($con,"select * from master");
		$i=1;
		if(mysqli_num_rows($s)==0){
			echo "<h1 class='text-center'>comming soon</h1>";
		}
		?>
		
		<?php 
		while($r=mysqli_fetch_array($s)):
		?>
		<div class="row">
		<?php		if($i%2){	?>
				
				<div class="col-sm-4  pt-5">
				<h3 class="text-center">
				<?php echo $r['title'];	?></h3>
				<p class="text-justify"><?php echo $r['descip'];?></p>
				</div>
				<div class="col-sm-8">
				<iframe width="630" height="315" src="<?php echo $r['emb']?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
					
				<?php	}
			else{
			?>
				
				<div class="col-sm-8">
				<iframe width="630" height="315" src="<?php echo $r['emb']?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
				<div class="col-sm-4  pt-5">
				<h3 class="text-center">
				<?php echo $r['title'];	?></h3>
				<p class="text-justify"><?php echo $r['descip'];?></p>
				</div>
				
				<?php }?>
				
		</div>
		
		<?php
		 $i++;
		endwhile;?>
			
			
	
			
		

		<div class="row pt-1 pb-1 justify-content-end">
			<nav aria-label="Page navigation pt-1 pb-1">
  <ul class="pagination justify-content-end">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
        <span class="sr-only">Previous</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
        <span class="sr-only">Next</span>
      </a>
    </li>
  </ul>
</nav>
		</div>
	</div>
</div>


</section>




<?php
include("footer.php");
?>