<?php session_start(); 
if(!isset($_SESSION['login'])){
$_SESSION['login'] = 0;
}
if(!isset($_SESSION['role'])){
$_SESSION['role'] = 0;
}
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>SOLOarancini | Home</title>

  <!-- Define Charset -->
  <meta charset="utf-8">

  <!-- Responsive Metatag -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Page Description and Author -->
  <meta name="description" content="Margo - Responsive HTML5 Template">
  <meta name="author" content="iThemesLab">

  <!-- Bootstrap CSS  -->
  <link rel="stylesheet" href="asset/css/bootstrap.min.css" type="text/css" media="screen">

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">

  <!-- Slicknav -->
  <link rel="stylesheet" type="text/css" href="css/slicknav.css" media="screen">

  <!-- Margo CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/style.css" media="screen">

  <!-- Responsive CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/responsive.css" media="screen">

  <!-- Css3 Transitions Styles  -->
  <link rel="stylesheet" type="text/css" href="css/animate.css" media="screen">

  <!-- Color CSS Styles  -->
  <link rel="stylesheet" type="text/css" href="css/colors/red.css" title="red" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/jade.css" title="jade" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/blue.css" title="blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/beige.css" title="beige" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/cyan.css" title="cyan" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/green.css" title="green" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/orange.css" title="orange" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/peach.css" title="peach" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/pink.css" title="pink" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/purple.css" title="purple" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/sky-blue.css" title="sky-blue" media="screen" />
  <link rel="stylesheet" type="text/css" href="css/colors/yellow.css" title="yellow" media="screen" />


  <!-- Margo JS  -->
  <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
  <script type="text/javascript" src="js/jquery.migrate.js"></script>
  <script type="text/javascript" src="js/modernizrr.js"></script>
  <script type="text/javascript" src="asset/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery.fitvids.js"></script>
  <script type="text/javascript" src="js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="js/nivo-lightbox.min.js"></script>
  <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
  <script type="text/javascript" src="js/jquery.appear.js"></script>
  <script type="text/javascript" src="js/count-to.js"></script>
  <script type="text/javascript" src="js/jquery.textillate.js"></script>
  <script type="text/javascript" src="js/jquery.lettering.js"></script>
  <script type="text/javascript" src="js/jquery.easypiechart.min.js"></script>
  <script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
  <script type="text/javascript" src="js/jquery.parallax.js"></script>
  <script type="text/javascript" src="js/jquery.slicknav.js"></script>
  <!--[if IE 8]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
  <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->

</head>

<body>

  <!-- Full Body Container -->
  <div id="container">


    <!-- Start Header Section -->
    <div class="hidden-header"></div>
    <header class="clearfix">

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <!-- Start Contact Info -->
              <ul class="contact-details">
                <li><a href="#"><i class="fa fa-map-marker"></i> Catania, Sicilia, IT</a>
                </li>
                <li><a href="#"><i class="fa fa-envelope-o"></i> info@soloarancini.it</a>
                </li>
                <li><a href="#"><i class="fa fa-phone"></i> +39 095 769 666</a>
                </li>
              </ul>
              <!-- End Contact Info -->
            </div>
            <!-- .col-md-6 -->
            <div class="col-md-6">
			<!--social omessi-->
            </div>
            <!-- .col-md-6 -->
          </div>
          <!-- .row -->
        </div>
        <!-- .container -->
      </div>
      <!-- .top-bar -->
      <!-- End Top Bar -->


      <!-- Start  Logo & Naviagtion  -->
      <div class="navbar navbar-default navbar-top">
        <div class="container">
          <div class="navbar-header">
            <!-- Stat Toggle Nav Link For Mobiles -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <i class="fa fa-bars"></i>
            </button>
            <!-- End Toggle Nav Link For Mobiles -->
            <a class="navbar-brand" href="index.php">
              <img alt="" src="images/soloarancini.png">
            </a>
          </div>
          <div class="navbar-collapse collapse">
		  <!-- Start Navigation List -->
            <ul class="nav navbar-nav navbar-right">
			  <?php if ($_SESSION["role"]) { ?>
			  <li><a href="admin_page.php">Admin</a>
              </li>
			  <?php } ?>
              <li><a class="active" href="index.php">Home</a>
              </li>
              <li><a href="product_page.php">Prodotti</a>
              </li>
              <li>
                <a href="profile_page.php">
					<img src="images/user_icon.png" height="42" width="42"></img>
					</a>
                <ul class="dropdown">
				  <?php if (!$_SESSION["login"]) { ?>
				  <li><a href="registration_page.php">Registrati</a>
                  </li>
                  <li><a href="login_page.php">Log in</a>
                  </li>
				  <?php } else {	?>
                  <li><a href="profile_page.php"><?php echo $_SESSION['nome'] ?></a>
                  </li>
                  <li><a href="logout.php">Log out</a>
                  </li>
				  <?php } ?>
                </ul>
              </li>
              <li><a href="chart_page.php">
					<img src="images/shopping_chart_icon.png" height="42" width="42"></img>
					</a>
              </li>
            </ul>
            <!-- End Navigation List -->
          </div>
        </div>

            <!-- Start Mobile Menu -->
            <ul class="wpb-mobile-menu">
			  <?php if ($_SESSION["role"]) { ?>
			  <li><a href="admin_page.php">Admin</a>
              </li>
			  <?php } ?>
              <li><a class="active" href="index.php">Home</a>
              </li>
              <li><a href="product_page.php">Prodotti</a>
              </li>
              <li>
                <a href="login_page.php">
					<img src="images/user_icon.png" height="42" width="42"></img>
					</a>
                <ul class="dropdown">
                  <?php if (!$_SESSION["login"]) { ?>
				  <li><a href="registration_page.php">Registrati</a>
                  </li>
                  <li><a href="login_page.php">Log in</a>
                  </li>
				  <?php } else {	?>
                  <li><a href="profile_page.php"><?php echo $_SESSION['nome'] ?></a>
                  </li>
                  <li><a href="logout.php">Log out</a>
                  </li>
				  <?php } ?>
                </ul>
              </li>
              <li><a href="chart_page.php">
					<img src="images/shopping_chart_icon.png" height="42" width="42"></img>
					</a>
              </li>
            </ul>
            <!-- End Mobile Menu -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->


    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="images/slider/Arancini1.bmp" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                            <span>Benvenuti a <strong>SOLOarancini</strong></span>
                          </h2>
                <h3 class="animated3">
                              <span>Delizie per il tuo palato</span>
                            </h3>
                <p class="animated4"><a href="#" class="slider btn btn-system btn-large">dai un'occhiata</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/Arancini2.bmp" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated4">
                                <span><strong>SOLOarancini</strong> vere specialità</span>
                            </h2>
                <h3 class="animated5">
                              <span>provali ora</span>
                            </h3>
                <p class="animated6"><a href="#" class="slider btn btn-system btn-large">comprali</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="images/slider/Arancini3.bmp" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7 white">
                                <span>La via del <strong>sapore</strong></span>
                            </h2>
                <h3 class="animated8 white">
                              <span>cosa aspetti?</span>
                            </h3>
                <div class="">
                  <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">comprali ora</a>
                </div>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->


    <!-- Start Content -->
    <div id="content">


      <!-- Start Services Section -->
      <div class="container">
        <div class="row">

          <!-- Start Service Icon 1 -->
          <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
            <div class="service-icon">
              <img src="images/icona1.jpg" alt="Smiley face" width="42" height="42">
            </div>
            <div class="service-content">
              <h4>Serviti in loco</h4>
              <p>Possibilità di consumare le nostre specialità direttamente nei punti vendita.</p>
            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
            <div class="service-icon">
              <img src="images/icona2.png" alt="Smiley face" width="42" height="42">
            </div>
            <div class="service-content">
              <h4>Domicilio</h4>
              <p>Una volta scelto il punto vendita più vicino a te, possiamo recapitare i tuoi ordini direttamente a casa tua.</p>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-4 col-sm-4 service-box service-icon-left-more">
            <div class="service-icon">
              <img src="images/icona3.png" alt="Smiley face" width="42" height="42">
            </div>
            <div class="service-content">
              <h4>Ingredienti di prima scelta</h4>
              <p>Solo ingredienti di prima scelta per i nostri clienti. Prepariamo i nostri arancini ancora esattamente come 100 anni fa.</p>
            </div>
          </div>
          <!-- End Service Icon 3 -->

        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
      <!-- End Services Section -->

      <!-- Divider -->
      <div class="hr1 margin-60"></div>

      <!-- Divider -->
      <div class="hr1 margin-60"></div>

    </div>
    <!-- End Content -->


    <!-- Start Footer -->
    <footer>
      <div class="container">
        <div class="row footer-widgets">

          <!-- Start Contact Widget -->
          <div class="col-md-3" style="width: 100%; margin: 0 auto;">
            <div class="footer-widget contact-widget">
              <h4><img src="images/soloarancini-black.PNG" class="img-responsive" alt="Footer Logo" style="margin: 0 auto;"/></h4>
              <p>Il nostro franchising di arancini si occupa di portare uno tra gli alimenti tradizionali più importanti della Sicilia nel mondo.</p>
              <ul>
                <li><span>Numero Telefonico:</span> +39 095 769 666</li>
                <li><span>Email:</span> info@soloarancini.it</li>
              </ul>
            </div>
          </div>
          <!-- .col-md-3 -->
          <!-- End Contact Widget -->


        </div>
        <!-- row -->

        <!-- Start Copyright -->
        <div class="copyright-section">
          <div class="row">
            <div class="col-md-6">
              <p>&copy; 2016 - Tutti i diritti riservati - Daniele Castro & Loris Occhipinti
            </div>
          </div>
        </div>
        <!-- End Copyright -->

      </div>
    </footer>
    <!-- End Footer -->

  </div>
  <!-- End Container -->

  <!-- Go To Top Link -->
  <a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

  <!-- Style Switcher -->
  <div class="switcher-box">
    <a class="open-switcher show-switcher"><i class="fa fa-cog fa-2x"></i></a>
    <h4>Style Switcher</h4>
    <span>12 Predefined Color Skins</span>
    <ul class="colors-list">
      <li>
        <a onClick="setActiveStyleSheet('blue'); return false;" title="Blue" class="blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('sky-blue'); return false;" title="Sky Blue" class="sky-blue"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('cyan'); return false;" title="Cyan" class="cyan"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('jade'); return false;" title="Jade" class="jade"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('green'); return false;" title="Green" class="green"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('purple'); return false;" title="Purple" class="purple"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('pink'); return false;" title="Pink" class="pink"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('red'); return false;" title="Red" class="red"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('orange'); return false;" title="Orange" class="orange"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('yellow'); return false;" title="Yellow" class="yellow"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('peach'); return false;" title="Peach" class="peach"></a>
      </li>
      <li>
        <a onClick="setActiveStyleSheet('beige'); return false;" title="Biege" class="beige"></a>
      </li>
    </ul>
    <span>Top Bar Color</span>
    <select id="topbar-style" class="topbar-style">
      <option value="1">Light (Default)</option>
      <option value="2">Dark</option>
      <option value="3">Color</option>
    </select>
    <span>Layout Style</span>
    <select id="layout-style" class="layout-style">
      <option value="1">Wide</option>
      <option value="2">Boxed</option>
    </select>
    <span>Patterns for Boxed Version</span>
    <ul class="bg-list">
      <li>
        <a href="#" class="bg1"></a>
      </li>
      <li>
        <a href="#" class="bg2"></a>
      </li>
      <li>
        <a href="#" class="bg3"></a>
      </li>
      <li>
        <a href="#" class="bg4"></a>
      </li>
      <li>
        <a href="#" class="bg5"></a>
      </li>
      <li>
        <a href="#" class="bg6"></a>
      </li>
      <li>
        <a href="#" class="bg7"></a>
      </li>
      <li>
        <a href="#" class="bg8"></a>
      </li>
      <li>
        <a href="#" class="bg9"></a>
      </li>
      <li>
        <a href="#" class="bg10"></a>
      </li>
      <li>
        <a href="#" class="bg11"></a>
      </li>
      <li>
        <a href="#" class="bg12"></a>
      </li>
      <li>
        <a href="#" class="bg13"></a>
      </li>
      <li>
        <a href="#" class="bg14"></a>
      </li>
    </ul>
  </div>

  <script type="text/javascript" src="js/script.js"></script>

</body>

</html>
