<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Serwink - Make your Occasion</title>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 

    <!-- Custom Fonts -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <!-- Theme CSS -->
    <link href="<?php echo base_url().'assets/css/grayscale.css'?>" rel="stylesheet">
        <link href="<?php echo base_url().'assets/css/sadie.css'?>" rel="stylesheet">
<style type="text/css">
    i{color: lightcoral}
    #line{color: rgb(214, 126, 33);
    width: 75%;
    border: solid 0.4px}
    .card-title
    {
        margin: 0;
    text-transform: uppercase;
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-weight: 700;
    letter-spacing: 5px;
    padding: 12px;
    }
    .btn-primary {
    color: #fff;
    background-color: lightcoral;
    border-color: lightcoral;
}
#fw{font-size: 18px;
    line-height: 2.6;}
</style>
</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
                </button>
                <a class=" page-scroll" href="#page-top">
                   <img src="<?php echo base_url().'assets/img/logos.png'?>" style="padding: 4px">
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse  navbar-main-collapse">
                             <ul class="nav navbar-nav navbar-left"><a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Become a partner</a></ul>
               <ul class="nav navbar-nav navbar-right ">

                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#download">Sign up</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Login</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2" style="padding-top: 70px;">
                        <h2 class="brand-heading">Serwink</h2>
                        <h3 class="intro-text">Make your Occasion</h3>
                        <hr>
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
            <div id="custom-search-input">
                <div class="input-group col-md-12" style="padding-bottom: 100px;">
                    <input type="text" class="form-control input-lg" placeholder="Event search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-lg" style="height: 46px ;width:50px" type="button">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        </div>
</div>



                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- About Section -- margin-right:0px;margin-left:15px" -->
    <section id="about" class="container content-section text-center" style="padding-top: 41px;">
      
       <div class="row">
        <div class="grid">  
                    <figure class="effect-sadie">
                           <img src="<?php echo base_url().'assets/img/unnamed5.jpg'?>" alt="img06"/>
                        <figcaption>
                            <h2>event <br>spaces</h2>
                            <p>When Layla appears, she brings an eternal summer along.</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                     <figure class="effect-sadie">
                        <img src="<?php echo base_url().'assets/img/unnamed1.jpg'?>" alt="img06"/>
                        <figcaption>
                            <h2>addons</h2>
                            <p>When Layla appears, she brings an eternal summer along.</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                     <figure class="effect-sadie">
                        <img src="<?php echo base_url().'assets/img/unnamed.jpg'?>" alt="img06"/>
                        <figcaption>
                            <h2>artists</h2>
                            <p>When Layla appears, she brings an eternal summer along.</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                     <figure class="effect-sadie">
                        <img src="<?php echo base_url().'assets/img/unnamed6.jpg'?>" alt="img06"/>
                        <figcaption>
                            <h2>make my event</span></h2>
                            <p>When Layla appears, she brings an eternal summer along.</p>
                            <a href="#">View more</a>
                        </figcaption>           
                    </figure>
                </div>
                <hr id="line">
                  <div class="container">  
          <H2 style=" font-weight:300;">How to search for a venue</H2>
        <div class="col-md-12">
         <div class="col-md-4" >
             
           <i class="fa fa-search fa-5x" aria-hidden="true"></i><br><br>
          <p>Browse</p>
         <p id="fw">Search by city, then use filters to narrow
your search and find the perfect venue.</p>      
             
            </div>
           <div class="col-md-4">
             <i class="fa fa-flash fa-5x" aria-hidden="true"></i><br><br>
          <p>Browse</p>
         <p id="fw">Search by city, then use filters to narrow
your search and find the perfect venue.</p>    
            </div>
           <div class="col-md-4">
             
             <i class="fa fa-calendar-check-o fa-5x" aria-hidden="true"></i><br><br>
          <p>Browse</p>
         <p id="fw">Search by city, then use filters to narrow
your search and find the perfect venue.</p>    
             
            </div>
         
         
         </div>
        <hr>
        
        </div>
                </div>
                <hr id="line">
  <div class="row">  
        <div class="col-md-12" style="background-color:rgba(204, 204, 204,0.35  )">
         <div class="col-md-4" >
                      <div class="card">
<!-- class=".card-block" -->
  <div class="card-block">
    <h4 class="card-title">Dalchini</h4>
  </div>
<!-- class="card-img-top" -->
  <img class="card-img-top" src="<?php echo  base_url().'assets/img/dalchini.jpg'?>" alt="Pizza ">
  <div class="card-block">
      <p id="fw">Average rating<span class="label label-success">4.7 &nbsp;&nbsp;<i class="fa fa-star" aria-hidden="true"></i></span> </p>
      <p><a class="btn btn-primary btn-outline">Book Now >></a></p>
    
  </div>
</div>
</div>
           <div class="col-md-4" style="height:300px">
                     <div class="card">
<!-- class=".card-block" -->
  <div class="card-block">
    <h4 class="card-title">Fionnna</h4>
  </div>
<!-- class="card-img-top" -->
  <img class="card-img-top" src="<?php echo  base_url().'assets/img/fiona3.jpg'?>" alt="Pizza ">
  <div class="card-block">
      <p id="fw">Average rating<span class="label label-success">4.2 &nbsp;&nbsp;<i class="fa fa-star" aria-hidden="true"></i></span> </p>
      <p><a class="btn btn-primary btn-outline">Book Now >></a></p>
    
  </div>
</div>
             
            </div>
           <div class="col-md-4">
             
          <div class="card">
<!-- class=".card-block" -->
  <div class="card-block">
    <h4 class="card-title">Gril</h4>
  </div>
<!-- class="card-img-top" -->
  <img class="card-img-top" src="<?php echo  base_url().'assets/img/gril1.jpg'?>" alt="Pizza ">
  <div class="card-block">
      <p  id="fw">Average rating <span class="label label-success">4.5   &nbsp;&nbsp;<i class="fa fa-star" aria-hidden="true"></i></span> </p>
      <p><a class="btn btn-primary btn-outline">Book Now >></a></p>
    
  </div>
</div>
             
            </div>
         
         
         </div>
            <p style="float:right"> <a href="" class="btn btn-default btn-lg"><i class=""></i> <span class="network-name">View more</span></a></p>
 
        
        </div>
    </section>

    <!-- Download Section -->
    <section id="download" class="content-section text-center">
        <div class="download-section">
            <div class="container">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Download serink</h2>
                    <p>You can download Grayscale for free on the preview page at Start Bootstrap.</p>
                    <a href="http://startbootstrap.com/template-overviews/grayscale/" class="btn btn-default btn-lg">Visit Download Page</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h1 style="color: black">Contact Us</h1>
                <p style="color: black"><b>Mumbai|Banglore|Pune|Nagpur</b></p>
                <p style="color:black">Feel free to email us to provide some feedback !!</p>
                <p><a href="mailto:feedback@startbootstrap.com">feedback@serwink.com</a>
                </p>
                <ul class="list-inline banner-social-buttons">
                    <li>
                        <a href="https://twitter.com/SBootstrap" class="btn btn-default btn-lg"><i class="fa fa-twitter fa-fw"></i> <span class="network-name">Twitter</span></a>
                    </li>
                    <li>
                        <a href="https://github.com/IronSummitMedia/startbootstrap" class="btn btn-default btn-lg"><i class="fa fa-github fa-fw"></i> <span class="network-name">Github</span></a>
                    </li>
                    <li>
                        <a href="https://plus.google.com/+Startbootstrap/posts" class="btn btn-default btn-lg"><i class="fa fa-google-plus fa-fw"></i> <span class="network-name">Google+</span></a>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Map Section -->

    <!-- Footer -->
    <footer>
        <div class="container text-center" style="color: black">
            <p>Copyright &copy; SERWINK <?PHP echo date('Y');?></p>
        </div>
    </footer>

    <!-- jQuery -->
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <script src="<?php echo base_url().'assets/js/grayscalemin.js'?>"></script>
    <script type="text/javascript">
  $(".intro").backstretch(["<?php echo base_url().'assets/img/img1(1).jpg'?>","<?php echo base_url().'assets/img/img1(2).jpg'?>","<?php echo base_url().'assets/img/img1(3).jpg'?>","img/food-sweet-cake-candles-6203.jpg"],{fade:1000,duration:1600});
</script>

</body>

</html>
