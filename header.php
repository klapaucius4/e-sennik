<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>IT Host - Hosting Template</title>
	<meta charset="UTF-8">
	<meta name="description" content="Cloud 83 - hosting template ">
	<meta name="keywords" content="cloud, hosting, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link href="<?= get_template_directory_uri(); ?>/img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">


	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/font-awesome.min.css"/>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/flaticon.css"/>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/owl.carousel.min.css"/>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/animate.css"/>
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/styles.css"/>


	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <?php wp_head(); ?>

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<a href="./index.html" class="site-logo"><img src="<?= get_template_directory_uri(); ?>/img/logo.png" alt=""></a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="nav-warp">
			<div class="user-panel">
				<a href="#">Wróżba online</a>
			</div>
			<ul class="main-menu">
				<li><a href="./index.html">Strona główna</a></li>
				<li><a href="./about.html">Alfabetyczny spis snów</a></li>
				<li><a href="./blog.html">Artykuły</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="<?= get_template_directory_uri(); ?>/img/bg.svg">
		<div class="container h-100">
			<div class="hero-content text-white">
				<div class="row">
					<div class="col-lg-7 pr-0">
						<h2>Znajdź sen</h2>
						<p>Wyszukaj znaczenie snu, o którym ostatnio śniłeś/aś. Wpisz poniżej kluczowe słowo, związane ze snem.</p>
						<a href="#" class="site-btn">Get your plan</a>
					</div>
				</div>
				<div class="hero-rocket">
					<img src="<?= get_template_directory_uri(); ?>/img/birds.svg" alt="<?= __('Księżyc'); ?>">
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->