<?php

if(isset($_REQUEST['logoutbtn'])){
   setcookie("cok","asdfas",time()-1400);
header("location:home.php");  
     
     
     
 }

?>




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
        
       
       
    <title>Hello, world!</title>
  </head>
  <body>
    
    <header>
        <nav class="navbar sticky-top navbar-expand-lg navbar-darker bg-darker">
          <a class="navbar-brand" href="home.php"><img src="images/logo.png" alt="logod"></a>
          <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto ">
              <li class="nav-item active">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">start learing</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                coures
                </a>
                <div class="dropdown-menu  bg-dropdown" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">biginner course</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">intermediate course</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">advance coures</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">new songs</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">easy songs</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">old songs</a>
                </div>
             </li>
               <li class="nav-item">
                   <a class="nav-link" href="#">About Us </a>
              </li>
               <li class="nav-item">
                  <form method="post">
                 <input type="submit" class=" btn btn-none" value="logout" name="logoutbtn">
                                                       </form>
              </li>
            </ul>
           
          </div>
        </nav>
    </header>