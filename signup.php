<?php

include("connect.php");

$msg="";

if(isset($_REQUEST['btn1'])){
    
    $email=$_REQUEST['email'];
    $name=$_REQUEST['name'];
    $number=$_REQUEST['number'];
    $pwd=$_REQUEST['pwd'];
    
    
    $r=mysqli_query($con,"insert into users (email,name,number,pwd)values('$email','$name','$number','$pwd')");
 
    
    
    if($r==true){
        $msg="data save";
       
    }
    
    else{
        $msg="error while saving data";
    }
    
    
    
    
}

include("header.php");

?>









   <section>
       <div class="container-fluid banner">
           <div class="row ">
              <div class="col-sm-3">1</div>
               <div class="col-sm-6 text-center">
                   <form action="" method="post" class="form-group">
                       <div class="row">
                           <div class="col-sm-12">
             <input type="text" class="form-control" name="email" placeholder="email">
                           </div>
                       </div>
                        <div class="row">
                           <div class="col-sm-12">
                               <input type="text" class="form-control" name="name" placeholder="name">
                           </div>
                       </div>
                        <div class="row">
                           <div class="col-sm-12">
                               <input type="text" class="form-control" name="number" placeholder="number">
                           </div>
                       </div>
                        <div class="row">
                           <div class="col-sm-12">
                               <input type="password" class="form-control" name="pwd" placeholder="password">
                           </div>
                       </div>
                       <div class="row">
                           <div class="col-sm-12">
        <input type="submit" class="btn btn-outline-success" name="btn1" >
                              <h1 class="text-light"> <?php
                                    echo $msg;                                                                              
                                                                                                                  
                                                                                                                  ?></h1>
                           </div>
                       </div>
                       
                       
                       
                       
                       
                       
                       
                       
                   </form>
               </div>
               <div class="col-sm-3">2</div>
           </div>
       </div>
 
       
             
                   
                               
       
       
   </section>
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src=" https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
       <script>
    baguetteBox.run('.tz-gallery');
</script>
  </body>
</html>