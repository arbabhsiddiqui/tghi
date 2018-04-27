<?php

include("connect.php");

$msg="";
if(isset($_REQUEST['btnlogin'])){
    
    $id=$_REQUEST['id'];
    $pwd=$_REQUEST['pwd'];
    
    $runsql=mysqli_query($con,"select * from users where email='$id' and pwd='$pwd'");
    
    
    if(mysqli_num_rows($runsql)>0)
    {
       setcookie("cok","$id"); header("location:welcome.php");
    }
    else{
        $msg="invalid user";
    }
    
    
    
    
    
    
    
}



include("header.php");



?>


    <section>
      <div class="container-fluid">
            <div class="row">
              <div class="banner">
              <div class="row">
                  <div class="col-sm-8">
                    <h1 class="text-light display-4">start your musical journey today with free account</h1>  
                  </div>
                  <div class="col-sm-4">
                      <div class="inner pos">
              
                  <div class="card text-center" style="width: 20rem;">
                  <div class="card-body">
                    <h5 class="card-title">Login</h5>
                    <form action="" method="post" class="form-group">
                        
                        <input type="text" class="form-control" name="id" placeholder="userid/email">
                        
                        <input type="password" class="form-control mt-3" name="pwd" placeholder="password">
                        <div class="row pt-3">
                            <div class="col-sm-6">
                                <input type="submit" class="btn btn-success" name="btnlogin" value="login">
                            </div>
                            <div class="col-sm-6">
                                <a href="signup.php" class="btn btn-danger">signup</a>
                            </div>
                        </div>
                        
                        
                    </form>
                        
                  </div>
                </div>
                          
                  
                  
                  
              </div>
              
         
                      
                      
                  </div>
              </div>
                         </div>
        </div>
        </div>
                            
        
        
     
 
 
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