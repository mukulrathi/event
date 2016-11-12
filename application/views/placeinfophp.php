<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Bootstrap Theme Simply Me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="http://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <style>
  body {
      font: 20px Montserrat, sans-serif;
      line-height: 1.8;
      color: #f5f6f7;
  }
  .navbar {
      padding-top: 15px;
      padding-bottom: 15px;
      border: 0;
      border-radius: 0;
      margin-bottom: 0;
      font-size: 12px;
      letter-spacing: 5px;
  }
  .navbar-nav  li a:hover {
      color: #1abc9c !important;
  }
      .row {margin-right: 0 !important;
    margin-left: 0 !important ;}
      h1{color:#222;}
      #chnagebadge{
      color: white;
    background-color: green;
    font-size: 18px;
      }
      i{
              color: red;
    font-size: 27px;
    letter-spacing: 7px;
      }
      #votes{
              color: black;
    font-size: 13px;
          
      }
  </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-default">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Me</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="#">WHO</a></li>
        <li><a href="#">WHAT</a></li>
        <li><a href="#">WHERE</a></li>
      </ul>
    </div>
  </div>
</nav>
<br>
<!-- First Container -->
<div class="container">
    <div class="col-md-12">
    <div class="row">
         <div class="col-md-9" style=" padding-right: 0px;padding-left: 0px;">
             <div class="panel panel-default" >
         
             <img class="img-responsive" style="height:323px; width:854px" src="<?php echo base_url().'assets/img/man-person-red-white-min.jpg'?>">
        </div>
             <div class="row">

                 <div class="col-md-5">   <h1 style="margin-top: 6px">YELLO</h1></div>
        
        
               <div class="col-md-7" style="text-align:right;"><i class="fa fa-star-o" aria-hidden="true"></i><span class="badge" id="chnagebadge">5/6</span>
                 <p id="votes">83 Votes</p>
                 </div>
                 </div>
             <div class="row">
             <p style="color:#ccc">Pratap Nagar. Café, Casual Dining</p>
             
             </div>
            <hr>
    <div class="col-md-12">
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        <div class="col-md-3"></div>
        
        
                 </div>
                

    </div>
        <div class="col-md-3">
           <div class="panel panel-default">
            kjfhadskjfhk jahfdsjk
            
            </div>
             
             </div>
    
    
    </div>
    </div>
    </div>
<!-- Second Container -->

<footer class="container-fluid bg-4 text-center">
  <p>Bootstrap Theme Made By <a href="http://www.w3schools.com">www.w3schools.com</a></p> 
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
</body>
</html>
