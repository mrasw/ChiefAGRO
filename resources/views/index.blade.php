<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ChiefAGRO</title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- bootsrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/nivo-lightbox.css">
<link rel="stylesheet" type="text/css" href="css/nivo-lightbox/default.css">
<link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dancing+Script:400,700" rel="stylesheet">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
<!-- Navigation
    ==========================================-->
                        <!--navbar navbar-default navbar-fixed-top-->
<nav id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> 
          <span class="sr-only">Toggle navigation</span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
          <span class="icon-bar"></span> 
        </button>
      <a class="navbar-brand page-scroll" href="#page-top">ChiefAGRO</a> </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about" class="page-scroll">About</a></li>
        <!--<li><a href="#restaurant-menu" class="page-scroll">Menu</a></li>-->
        <li><a href="#portfolio" class="page-scroll">Shop by Category</a></li>
        <li><a href="#contact" class="page-scroll">Consultation</a></li>
        <!--<li><a href="#team" class="page-scroll">Account</a></li>-->
        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Welcome Back, {{ auth()->user()->name }}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> DashBoard</a></li>
            <li><a class="dropdown-item" href="#"><i class="bi bi-basket"></i> Keranjang</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <li>
              <form action="logout" method="post">
                @csrf
                <!-- <li><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></li> -->
                <button type="submit" class="dropdown-item"><a class="dropdown-item" href="logout"><i class="bi bi-box-arrow-left"></i> Logout</a></button>
              </form>
            </li>
          </ul>
        </li>
        @else
          <li><a href="/login">Account</a></li>
        @endauth
      
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
</nav>
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="intro-text">
            <h1>ChiefAGRO</h1>
            <!--<p>Restaurant / Coffee / Pub</p>-->
            <a href="#about" class="btn btn-custom btn-lg page-scroll">Discover Us</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6 ">
        <div class="about-img"><img src="img/about.jpeg" class="img-responsive" alt=""></div>
      </div>
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Our Shop</h2>
          <hr>
          <p><font size="4,5">Tempat anda mencari berbagai macam obat tanaman, hewan, dan ikan serta platform penyedia layanan konsultasi online dan juga marketplace khususnya di sektor agrokompleks.</font></p>
          <!--<h3>Awarded Chefs</h3>-->
          <p><font size="4,5">ketahui apa masalah pada tanaman, hewan, dan ikan anda serta temukan solusinya disini.</font></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Restaurant Menu Section -->
<!--<div id="restaurant-menu">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Menu</h2>
      <hr>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Breakfast & Starters</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $35 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $30 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $30 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $30 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Main Course</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $45 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $30 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $30 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $30 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Dinner</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $45 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $350 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $30 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam.. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $30 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-6">
        <div class="menu-section">
          <h2 class="menu-section-title">Coffee & Drinks</h2>
          <hr>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $35 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $30 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $30 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
          <div class="menu-item">
            <div class="menu-item-name"> Delicious Dish </div>
            <div class="menu-item-price"> $30 </div>
            <div class="menu-item-description"> Lorem ipsum dolor sit amet, consectetur adipiscing elit, duis sed dapibus leo nec ornare diam. </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>-->
<!-- Portfolio Section -->
<div id="portfolio">
  <div class="section-title text-center center">
    <div class="overlay">
      <h2>Shop by Category</h2>
      <hr>
      <p>Temukan berbagai macam produk sesuai kebutuhanmu.</p>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="categories">
        <ul class="cat">
          <li>
            <ol class="type">
              <li><a href="#" data-filter="*" class="active">All</a></li>
              <li><a href="#" data-filter=".breakfast">Bibit Tanaman</a></li>
              <li><a href="#" data-filter=".lunch">Pupuk Tanaman</a></li>
              <li><a href="#" data-filter=".dinner">Pet Food</a></li>
              <li><a href="#" data-filter=".dinner">Khusus Ikan</a></li>
            </ol>
          </li>
        </ul>
        <div class="clearfix"></div>
      </div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/01-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/01-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/02-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/02-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/03-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/03-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/04-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/04-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/05-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/05-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/06-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/06-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/07-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/07-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <!--<div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/08-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/08-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>-->
        <!--<div class="col-sm-6 col-md-4 col-lg-4 dinner">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/09-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/09-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>-->
        <!--<div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/10-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/10-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>-->
        <div class="col-sm-6 col-md-4 col-lg-4 lunch">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/11-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/11-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>
        <!--<div class="col-sm-6 col-md-4 col-lg-4 breakfast">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/portfolio/12-large.jpg" title="Dish Name" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Dish Name</h4>
              </div>
              <img src="img/portfolio/12-small.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>-->
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Contact Section -->
<div id="contact" class="text-center">
  <div class="container">
    <div class="section-title text-center">
      <h2>Consultation</h2>
      <hr>
      <p>Need help about Farm and Pet? just click <a href="https://forms.gle/NnCVm6qPWoyBgy819">link here</a> :D</p>
      <p>Need help with an existing order you've placed?</p>
      <p>Question about shipping costs or the best delivery to choose for both city and regional orders?</p>
      <p>For general product questions, product suggestions, ordering questions, marketing, or other information?</p>
      <p>Are you vendor interested in submitting a product for our store to carry?</p>
      <p>Just Contact Us at the contact below :D</p>
    </div>
    
  <!--
      <div class="col-md-10 col-md-offset-1">
        <form name="sentMessage" id="contactForm" novalidate>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" id="name" class="form-control" placeholder="Name" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="email" id="email" class="form-control" placeholder="Email" required="required">
                <p class="help-block text-danger"></p>
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Message" required></textarea>
            <p class="help-block text-danger"></p>
          </div>
          <div id="success"></div>
          <button type="submit" class="btn btn-custom btn-lg">Send Message</button>
        </form>
      </div>
  -->
  </div>
</div>
<div id="footer">
  <div class="container text-center">
    <div class="col-md-4">
      <h3>Address</h3>
      <div class="contact-item">
        <p><a href="https://linktr.ee/ChiefAGRO">Toko Pedia</a></p>
      </div>
    </div>
    <div class="col-md-4">
      <h3>Opening Hours</h3>
      <div class="contact-item">
        <p>Mon-Sun: 08:00 AM - 07:00 PM</p>
        <!--<p>Fri-Sun: 11:00 AM - 02:00 AM</p>-->
      </div>
    </div>
    <div class="col-md-4">
      <h3>Contact Info</h3>
      <div class="contact-item">
        <p>Phone/Whatsapp: </p><p><a href="https://wa.me/+62812471090661">+62 812 471 090 661</a></p>
        <p>Email: chiefagro@gmail.com</p>
      </div>
    </div>
  </div>
  <div class="container-fluid text-center copyrights">
    
  </div>
</div>
<!--end of Contact section-->

<!-- Team Section -->
<!--<div id="team" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="col-md-10 col-md-offset-1 section-title">
        <h2>Meet Our Professional</h2>
        <hr>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit duis sed dapibus leonec.</p>
      </div>
      <div id="row">
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/01.jpg" alt="..."></div>
            <div class="caption">
              <h3>Mike Doe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/02.jpg" alt="..."></div>
            <div class="caption">
              <h3>Chris Doe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 team">
          <div class="thumbnail">
            <div class="team-img"><img src="img/team/03.jpg" alt="..."></div>
            <div class="caption">
              <h3>Ethan Doe</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>-->

<!-- Call Reservation Section -->
<!--
<div id="call-reservation" class="text-center">
  <div class="container">
    <h2>Want to make a reservation? Call <strong>1-887-654-3210</strong></h2>
  </div>
</div>
-->

<script type="text/javascript" src="js/jquery.1.11.1.js"></script> 
<script type="text/javascript" src="js/bootstrap.js"></script> 
<script type="text/javascript" src="js/SmoothScroll.js"></script> 
<script type="text/javascript" src="js/nivo-lightbox.js"></script> 
<script type="text/javascript" src="js/jquery.isotope.js"></script> 
<script type="text/javascript" src="js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="js/contact_me.js"></script> 
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>
