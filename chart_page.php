<?php
session_start();
if(isset($_SESSION['carrello'])){$_SESSION['carrello'] = array_unique($_SESSION['carrello']);
				 $_SESSION['carrello'] = array_filter($_SESSION['carrello']);}
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "progetto";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
	echo "error";
} 
?>

<!doctype html>
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><html lang="en" class="no-js"> <![endif]-->
<html lang="en">

<head>

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
  <!-- Basic -->
  <title>SOLOarancini | Carrello</title>

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
  <script type="text/javascript">
	var carrello = <?php echo json_encode($_SESSION['carrello']) ?>;
	var execf = setInterval(function() {
		        var totale = 0;		
		for (var sgusto in carrello) {
			var selector_pezzi = "#n_pezzi_"+carrello[sgusto];
			var selector_prezzo = "#prezzo_"+carrello[sgusto];						
			var n_pezzi = $(selector_pezzi).val(); 			
			var prezzo = $(selector_prezzo).val();  
			var subtot = n_pezzi*prezzo;
			if (isNaN(subtot)){subtot = 0;}
			totale += subtot;  
			var selector_sub = "#subtot_"+carrello[sgusto]; 
			$(selector_sub).text("€ "+subtot);
		}
				
			$('#totale_acquisto').text("€ "+totale);
},50);	


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
              <li><a class="active" href="chart_page.php">
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
              <li><a class="active" href="chart_page.php">
					<img src="images/shopping_chart_icon.png" height="42" width="42"></img>
					</a>
              </li>
            </ul>
            <!-- End Mobile Menu -->

      </div>
      <!-- End Header Logo & Naviagtion -->

    </header>
    <!-- End Header Section -->

	<!-- start chart -->
	<div class="loginform" style="width: 30%; margin: 0 auto; margin-bottom: 10%; margin-top: 10%;">
	<?php if ($_SESSION['carrello'] == NULL) {?> 
	<div>
		<h3>Il tuo carrello è vuoto!</a> </h3>
	</div>
<?php } else { ?><form method="post" action="summary_page.php"> 
		  <h3><p><?php echo "Punto vendita: ".$_SESSION['punto_vendita_indirizzo'].", ".$_SESSION['punto_vendita_citta']." a ".$_SESSION['punto_vendita_distanza']." km" ?> </p></h3>					
					

 <?php		foreach($_SESSION['carrello'] as &$sgusto){			
			$sql = 'SELECT gusto, prezzo, (SELECT quantita FROM stock WHERE gusto="'.$sgusto.'" AND ID_punto_vendita="'.$_SESSION['punto_vendita_vicino'].'") as disponibilita FROM arancini WHERE gusto="'.$sgusto.'";';		 
		        $result = $conn->query($sql);	
			$dati_arancino=$result->fetch_assoc();			
			if ($dati_arancino['disponibilita'] > 0){
				 ?> 
					<!-- inizio interfaccia -->
					<table>
					<tr>
			         	    <th>Gusto</th>
					    <th>Prezzo</th>
			                    <th>Pezzi</th>
					    <th>Max</th>
					    <th>Subtot.</th>
					</tr>
					<tr>
					    <td><?php echo $dati_arancino['gusto'] ?></td>
					    <td><?php echo $dati_arancino['prezzo'] ?></td> <input type="hidden" name=<?php echo "prezzo_".$sgusto ?> value=<?php echo $dati_arancino['prezzo'] ?> id=<?php echo "prezzo_".$sgusto ?> value=<?php echo "€ ".$dati_arancino['prezzo'] ?>> 
					    <td><input type="number" name=<?php echo "n_pezzi_".$sgusto ?> id=<?php echo "n_pezzi_".$sgusto ?> value="1" min="0" max=<?php echo $dati_arancino['disponibilita']?>></td>					
					    <td><?php echo $dati_arancino['disponibilita']?></td>
					    <td><span id=<?php echo "subtot_".$sgusto ?>></span></td>
					</tr>
					</table>
					</h3>
					<!-- fine interfaccia -->
			<?php	}else{
				echo "Non ci sono arancini al $sgusto nel punto vendita più vicino a te (".$_SESSION['punto_vendita_indirizzo'].", ".$_SESSION['punto_vendita_citta'].")</br>";
			}//fine if else interno			
			
	}//fine foreach
}//fine if else principale?>
<?php if($_SESSION['carrello'] != NULL) { ?><h3><p>Totale: <span id="totale_acquisto">0</span></p></h3> <?php } ?>
<?php if($_SESSION['login'] && !$_SESSION['role']) { ?> <input id="procedi" type="submit" value="Procedi"> <?php } else { ?> </br>Devi effettuare il <a href="login_page.php">login</a> come cliente prima di procedere </br> <?php } ?>
<h3><a href="svuota_carrello.php">Svuota carrello</a><a href="product_page.php"> -- Prodotti</a></h3>
</form>
</div>
	<!-- End cgart -->
	
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
