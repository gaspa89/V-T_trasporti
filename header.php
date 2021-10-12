<?php 
$filename = $_SERVER['REQUEST_URI']; 
switch ($filename) {
	case '/chisiamo.php':
		$titolo = "Chi Siamo";
		// $descrizione = "V&T Trasporti è specializzata nel servizio di trasporto nazionale espresso e standard in 24/48/72 ore.";
		break;
		
	case '/servizi.php':
		$titolo = "Servizi";
		// $descrizione = "Tutti i servizi che V&T è in grado di offrire. ";
	break;
	
	case '/trasporti.php':
		$titolo = "Trasporti";
	break;

	case '/chisiamo.php':
		$titolo = "Azienda";
	break;

	case '/contatti.php':
		$titolo = "Contatti";
	break;

	case '/':
		$titolo = "Homepage";
	break;

	default:


	break;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>V&T Trasporti nazionali ed internazionali | <?php echo $titolo ?> </title>
        <link href="css/master.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	<body data-scrolling-animations="true">
		<div class="sp-body">
			<!-- Loader Landing Page -->
			<div id="ip-container" class="ip-container">
				<div class="ip-header" >
					<div class="ip-loader">
						<svg class="ip-inner" width="60px" height="60px" viewBox="0 0 80 80">
							<path class="ip-loader-circlebg" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,39.3,10z"/>
							<path id="ip-loader-circle" class="ip-loader-circle" d="M40,10C57.351,10,71,23.649,71,40.5S57.351,71,40.5,71 S10,57.351,10,40.5S23.649,10,40.5,10z"/>
						</svg> 
					</div>
				</div>
			</div>
			<!-- Loader end -->
			
	        <header id="this-is-top">
	            <div class="container-fluid">
	                <div class="topmenu row">
	                    <nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-5 col-lg-5">
	                        <p class="m-0" style="padding-top:7px !important; color: #fff">V&T Trasporti | Trasporti nazionali ed internazionali in 24/48/72 ore</p>
	                    </nav>
	                    <nav id="social-nav" class="text-right col-sm-3 col-md-3 col-lg-3">
	                        <!-- <a href="#"><i class="fa fa-facebook"></i></a>
	                        <a href="#"><i class="fa fa-google-plus"></i></a>
	                        <a href="#"><i class="fa fa-twitter"></i></a>
	                        <a href="#"><i class="fa fa-pinterest"></i></a>
	                        <a href="#"><i class="fa fa-youtube"></i></a> -->
	                    </nav>
	                </div>
	                <div class="row header">
	                    <div class="col-sm-3 col-md-3 col-lg-3">
	                        <a href="index.php" id="logo"></a>
	                    </div>
	                    <div id="contatti-header" class="col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-8 col-md-8 col-lg-8">
	                        <div class="text-right header-padding">
	                            <div class="h-block"><span>CONTATTI</span>1.800.987.6543</div>
	                            <div class="h-block"><span>EMAIL</span><a href="mailto:info@vettrasporti.it">info@vettrasporti.it</a></div>
	                        </div>
	                    </div>
	                </div>
	                <div id="main-menu-bg"></div>  
	                <a id="menu-open" href="#"><i class="fa fa-bars"></i></a> 
	                <nav class="main-menu navbar-main-slide">
						<ul class="nav navbar-nav navbar-main">
							<li><a href="index.php">HOME</a></li>
							<li><a href="chisiamo.php">CHI SIAMO</a></li>
							<li><a href="servizi.php">I NOSTRI SERVIZI </a></li>
							<li><a href="trasporti.php">I NOSTRI TRASPORTI </a></li>
							<li><a href="contatti.php">CONTATTI</a></li>
							<li><a class="btn_header_search" href="#"><i class="fa fa-search"></i></a></li>
						</ul>
						<div class="search-form-modal transition">
							<form class="navbar-form header_search_form">
								<i class="fa fa-times search-form_close"></i>
								<div class="form-group">
									<input type="text" class="form-control" placeholder="Search">
								</div>
								<button type="submit" class="btn btn_search customBgColor">Search</button>
							</form>
						</div>
	                </nav>
	                <a id="menu-close" href="#"><i class="fa fa-times"></i></a>
	            </div>
	        </header>