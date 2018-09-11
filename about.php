 
      
<header  class="about">
      
       <div class="container-fluid headdd">
           <?php
    
include("header.php");
    
    
?>
            <div class="row">
                <div class="col-sm-12">
                     <div class="text-work">
                     
                         <h1>contact us </h1>
                     
                     </div>
                </div>
            </div>
        </div>
    </header>
    
    <section>
    <div class="container-fluid aboutus">
    <div class="container">
    	
    	<div class="row pt-5 ">
    	<div class="col-sm-3">
    	
    		<form method="post" class="form-group">
    		<h4>Your Query</h4>
    		<div class="border pt-2 pl-2 pr-2 pb-2">
    			<div class="form-group">
    				<lable>email</lable>
 					<input type="text" class='form-control' id='email'>
    	   		</div>
    	   		<div class="form-group">
    				<lable>name</lable>
 					<input type="text" class='form-control' id='name'>
    	   		</div>
    	   		<div class="form-group">
    				<lable>number</lable>
 					<input type="text" class='form-control' id='number'>
    	   		</div>
    	   		<div class="form-group">
    				<lable>message or question</lable>
 					<input type="text" class='form-control' id='message'>
    	   		</div>
    	   		<div class="form-group">
    			
 					<input type="button" onclick="sendmail()" class='btn btn-danger' value="submit">
    	   		</div>
    	   	</div>
    	   		</form>	
    	</div>
    	<div class="col-sm-9 text-center location">
    		<div class="row">
		  	<div class="col-sm-12">
		  		<div class="google-maps">
		  			<iframe src="https://maps.google.com/maps?q=hader%20gunj%20%20%2Caishbagh%2Clucknow&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		  		</div>
		  	</div>
		  </div>
    	</div>
    
    	</div>
    		</div>
    	</div>
    	
    </section>
    
    
    <script src='js/mail.js'></script>



<?php
include("footer.php");
?>