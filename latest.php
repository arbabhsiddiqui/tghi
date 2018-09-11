<?php
include("header.php");
include('guru/includes/connect.php');
?>
<section class="latest ">
    <div class="continer-fluid">
        <div class="container">
            <div class="row pt-3">
                <div class="col-sm-12 text-center">
                    <h4>gallary</h4>
                </div>
            </div>
            <div class="row pt-2">
              <div class="col-sm-12">
              <div class="row">
               <?php
				$q=mysqli_query($con,"select * from latest");
				while($r=mysqli_fetch_array($q)):
				
				?>
               
                <div class="col-sm-6">
                  <div class="row">
                  	<div class="col-sm-8"><iframe width="560" height="315" src="<?php echo $r['link']?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe></div>
                  	
                  </div>
                   
                    
                    <div class="row">
                   	<div class="col-sm-12 text-center ">
                   		<h4><?php echo $r['title'] ?></h4>
                   	</div>
                   </div>	
                </div>
               
                <?php endwhile;?>
                 </div>
               </div>
                   
             <ul class="pagination pt-3">
  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
  <li class="page-item"><a class="page-link" href="#">1</a></li>
  <li class="page-item"><a class="page-link" href="#">2</a></li>
  <li class="page-item"><a class="page-link" href="#">3</a></li>
  <li class="page-item"><a class="page-link" href="#">Next</a></li>
</ul>       
        </div>
    </div>

</section>




<?php
include("footer.php");
?>