<?php session_start();
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

  <!-- Basic -->
  <title>SOLOarancini | Sommario</title>

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
  <style type="text/css">
      #map {
        width: 100%;
	height: 100%;
	border: 3px solid;
    	padding: 10px;
      }
  </style>
  <style type="text/css">
    .loginform {
        width: 150px;
        clear: both;
    }
    .loginform input {
        width: 100%;
        clear: both;
    }
    </style>


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
  <script><?php if (isset($_POST['q'])){
		?> var q = <?php echo $_POST['q'] ?>
		   alert(q);
	           <?php unset($_SESSION['carrello']);
			 unset($_SESSION['n_pezzi']);
			 header('Location: index.php');
			 exit();  
	} ?>
  </script>
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
              <li><a href="index.php">Home</a>
              </li>
              <li><a href="product_page.php">Prodotti</a>
              </li>
              <li>
                <a class="active" href="profile_page.php">
					<img src="images/user_icon.png" height="42" width="42"></img>
					</a>
                <ul class="dropdown">
				  <?php if (!$_SESSION["login"]) { ?>
				  <li><a href="registration_page.php">Registrati</a>
                  </li>
                  <li><a href="login_page.php">Log in</a>
                  </li>
				  <?php } else {	?>
                  <li><a class="active" href="profile_page.php"><?php echo $_SESSION['nome'] ?></a>
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
              <li><a href="index.php">Home</a>
              </li>
              <li><a href="product_page.php">Prodotti</a>
              </li>
              <li>
                <a class="active" href="login_page.php">
					<img src="images/user_icon.png" height="42" width="42"></img>
					</a>
                <ul class="dropdown">
                  <?php if (!$_SESSION["login"]) { ?>
				  <li><a href="registration_page.php">Registrati</a>
                  </li>
                  <li><a href="login_page.php">Log in</a>
                  </li>
				  <?php } else {	?>
                  <li><a class="active" href="profile_page.php"><?php echo $_SESSION['nome'] ?></a>
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


    <!-- Start summary -->	
	<div class=container style="width: 30%;margin-bottom: 5%; margin-top: 9.5%;"><h3>
	<?php 
	$totale = 0;
        $n_pezzi = 0;	
	echo "Lista acquisti:</br>";
	foreach($_SESSION['carrello'] as &$sgusto){		
		$_SESSION['n_pezzi'.$sgusto] = $_POST['n_pezzi_'.$sgusto];				
		$subtotale = $_POST['n_pezzi_'.$sgusto]*$_POST['prezzo_'.$sgusto];
		$totale += $subtotale;
		$n_pezzi += $_POST['n_pezzi_'.$sgusto];	
		print($sgusto.' ');
		print('€ '.$subtotale.'</br>');
		
	}

	echo "Altre informazioni:</br></br>";
	echo $_SESSION['nome']."</br>";
	echo $_SESSION['cognome']."</br>";
	echo $_SESSION['indirizzo'].", ".$_SESSION['citta']." ".$_SESSION['cap']."</br>";
	echo $_SESSION['telefono']."</br>";
	echo $_SESSION['mail']."</br>";
	echo "Tot. €".$totale."</br>";
	?></h3></div>
	<!-- End summary -->
	
<div  class="container" align="center"><form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">

  <!-- Identify your business so that you can collect the payments. -->
  <input type="hidden" name="business" value="soloarancini-facilitator-c_api1@gmail.com">

  <!-- Specify a Buy Now button. -->
  <input type="hidden" name="cmd" value="_xclick">

  <!-- Specify details about the item that buyers will purchase. -->
  <input type="hidden" name="item_name" value="arancini">
  <input type="hidden" name="item_number" <?php echo 'value="'.$pezzi_tot.'"' ?> >
  <input type="hidden" name="amount" <?php echo 'value="'.$totale.'"' ?>>
  <input type="hidden" name="currency_code" value="EUR">
  <input type="hidden" name="address1" <?php echo 'value="'.$_SESSION['indirizzo'].'"' ?>>
  <input type="hidden" name="city" <?php echo 'value="'.$_SESSION['citta'].'"' ?>>
  <input type="hidden" name="zip" <?php echo 'value="'.$_SESSION['cap'].'"' ?>>
  <input type="hidden" name="country" value="IT">
  <input type="hidden" name="email" <?php echo 'value="'.$_SESSION['mail'].'"' ?>>
  <input type="hidden" name="first_name" <?php echo 'value="'.$_SESSION['nome'].'"' ?>>
  <input type="hidden" name="last_name" value=<?php echo $_SESSION['cognome']?>>
  <input type="hidden" name="return" value="http://localhost/new_daniele/transazione.php" >
  <input type="hidden" name="rm" value="0">
  <input type="hidden" name="cancel_return" value="http://localhost/new_daniele/confirm_page.php?q=Il tuo ordine è stato cancellato">
  <input type="hidden" name="address_override" value="1">
  <!-- Display the payment button. -->
  <input type="image" name="submit" border="0"
  src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif"
  alt="PayPal - The safer, easier way to pay online">
  <img alt="" border="0" width="100px" height="100px"
  src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >

</form>
  </div>
  <!-- End Container -->

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
</body>

</html>
