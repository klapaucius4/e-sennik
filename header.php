<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="keywords" content="cloud, hosting, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?php wp_title(); ?></title>

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
	<link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/css/jquery-ui.min.css"/>
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
		<a href="<?= home_url(); ?>" class="site-logo"><img src="<?= get_template_directory_uri(); ?>/img/logo-white.svg" alt=""></a>
		<div class="nav-switch">
			<i class="fa fa-bars"></i>
		</div>
		<div class="nav-warp">
			<div class="user-panel">
				<a href="#"><?= __('Wróżba online'); ?></a>
			</div>

			<?php
			if(has_nav_menu('menu-1')):
				wp_nav_menu(
					array(
						'menu'   => 'menu-1',
						'container' => false,
						'menu_class' => 'main-menu'
					)
				);
			endif;
			?>
			<!-- <ul class="main-menu">
				<li><a href="./index.html">Strona główna</a></li>
				<li><a href="./about.html">Alfabetyczny spis snów</a></li>
				<li><a href="./blog.html">Artykuły</a></li>
			</ul> -->
		</div>
	</header>
	<!-- Header section end -->
