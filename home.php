
   
   <header  class="banner">
       <div class="container">
       <?php
    
include("header.php");

		   include('guru/includes/connect.php');
    
    
?>
        
        </div>
        <div class="container-fluid heading">
            <div class="row">
                <div class="col-sm-12">
                     <div class="text-area">
                     
                         <h1>Learn Guitar WithIn Weeks</h1>
                     
                     </div>
                </div>
            </div>
        </div>
    </header>
   
   
    <section>
      <div class="continer-fluid aboutus">
          <div class="container">
              <div class="row pt-3 text-center ">
                  <div class="col-sm-12">
                      <h3>about us</h3>
                  </div>
              </div>
              <div class="row">
                  <div class="col-sm-6 pt-2">
                        <img alt="about" src="images/amir.PNG"  class="img-fluid" >
                  </div>
                  <div class="col-sm-6 pt-2 text-justify">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Magnam ipsa ipsam, excepturi exercitationem ut voluptate, error blanditiis facilis impedit a facere harum possimus iste modi, odit velit amet dignissimos incidunt. Nulla cupiditate excepturi quod dolor neque quae placeat nihil rem fugit maiores esse nobis labore, cum qui atque exercitationem id. Rem ipsa autem deleniti laudantium ex similique mollitia, qui id assumenda necessitatibus numquam nam odit fugiat veritatis? Nobis asperiores accusamus dolor quia atque, iste pariatur rerum sit ipsa numquam cumque sequi exercitationem? Officia dignissimos animi ad quasi beatae sed, quos minima incidunt possimus reiciendis voluptate, eligendi, itaque perspiciatis placeat aliquam fugiat? Distinctio delectus eum, error porro voluptatem amet quae! Minus, totam! Libero suscipit et ab totam aut quia tenetur animi esse vero cupiditate, rerum consequuntur saepe est provident repudiandae laborum enim ad cum illo eveniet incidunt iste repellat expedita. Fugit, exercitationem deleniti, nam hic corporis incidunt unde animi provident qui veritatis omnis iusto sit doloribus praesentium nobis consequuntur facere. Sequi, mollitia veniam. Expedita quos, molestiae laboriosam ab natus explicabo officia cumque, dolores excepturi aliquam unde voluptates? Incidunt eligendi veritatis doloremque numquam, sequi ut praesentium autem mollitia, qui, earum cumque debitis. Obcaecati magnam mollitia sint dignissimos iste iusto omnis saepe a suscipit corporis, odit facilis dolorum deleniti aspernatur, vero nihil neque veritatis accusamus. Eos, nesciunt reiciendis facere vitae cum ipsam repellat repellendus quos voluptatibus doloremque officia laudantium. Accusantium dicta aperiam expedita sapiente nulla delectus, itaque debitis mollitia eligendi dolore, impedit necessitatibus.    
                        </p>
                      
                  </div>
              </div>              
          </div>
          
      </div>
      
      
      
      
        
      <div class="container-fluid section-a">
        <div class="container">
         <div class="row  pt-5">
             <div class="col-sm-12">
                 <h1 class="text-center text-light ">Courses Provided by us </h1>
             </div>
         </div>
          <div class="row ">
            <div class="col-sm-4 wrap pt-1 pb-1">
                <img src="images/course.jpg" alt="" class="img-fluid">
                <div class="cont text-center ">
                    <h3 class="text-light">Bigginer</h3>
                    <p class="text-none">if your are new to guitar world select me</p>
                   <a href="beginner.php" class="btn btn-info">click here</a>
                </div>
                
                
                
            </div>
            <div class="col-sm-4 wrap pt-1 pb-1">
                
                <img src="images/course.jpg" alt="" class="img-fluid">
                <div class="cont text-center ">
                    <h3 class="text-light">Advance</h3>
                    <p class="text-none">if you know basic and want to improve select me</p>
                   <a href="advance.php" class="btn btn-info">click here</a>
                   </div>
                
                
                
            </div>
            <div class="col-sm-4 wrap pt-1 pb-1">
                
                <img src="images/course.jpg" alt="" class="img-fluid">
                <div class="cont text-center ">
                    <h3 class="text-light">Master</h3>
                    <p class="text-none">to master select me</p>
                    <a href="master.php" class="btn btn-info">click here</a>
                </div>
                
                
                
            </div> 
        </div>
      </div>
    </div>
        
             
       <div class="container-fluid section-b">
         <div class="container">
          <div class="row pt-2 pb-2">
              <div class="col-sm-12 text-center"><h2>latest update</h2></div>
          </div>
           <div class="row pt-5">
               <div class="col-sm-6 pt-5 d-none d-lg-block text-center">
                  <div class="row pt-5">
                      <div class="col-sm-12 ">
                           <h3 class="text-light">top 10 easy to learn songs</h3>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12 pt-3">
                           <a href="latest.php" class="btn btn-index">learn now</a>
                            
                      </div>
                  </div>
               
                   
                   
                   
                   
               </div>
               <div class="col-sm-4  d-sm-block d-md-none text-center">
                  <div class="row">
                      <div class="col-sm-12 ">
                           <h3 class="text-light">top 10 easy songs</h3>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-sm-12">
                            <p class="text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae minus, necessitatibus    deserunt sapiente dolorum est tempora et ipsa, expedita libero, nihil itaque architecto        officiis dolorem. Porro numquam, atque enim pariatur.
                            </p>
                      </div>
                  </div>
               
                   
                   
                   
                   
               </div>
               <div class="col-sm-6 d-none d-lg-block">
                 <?php $q=mysqli_query($con,'select * from latest order by id DESC');
				   
				   $r=mysqli_fetch_array($q);
				   
				   ?>
                 
                  <iframe width="560" height="315" src="<?= $r['link']?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
               </div>
              
           </div>
       </div>
                                      </div>  
                                    
                            
        
    
        
     
 
 
    
    </section>
    
    
    
    
<?php
include("footer.php");
?>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
