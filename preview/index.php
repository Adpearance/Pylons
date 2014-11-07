<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="HandheldFriendly" content="true">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="content-language" content="en">
		<link type="text/plain" rel="author" href="humans.txt" />

		<!--  SEO -->
		<title></title>
		<meta name="description" content="">
		
		<!--  OpenGraph -->
		<meta name="og:title" content=""/>
		<meta name="og:type" content=""/>
		<meta name="og:url" content=""/>
		<meta name="og:image" content=""/>
		<meta name="og:site_name" content=""/>
		<meta name="og:description" content=""/>

		<!--  Favicons -->
		<link rel="apple-touch-icon-precomposed" href="apple-touch-icon-precomposed.png">
		<link rel="icon" href="favicon.png"><!--[if IE]><link rel="shortcut icon" href="favicon.ico"><![endif]-->
		<meta name="msapplication-TileColor" content="#FFC40D">
		<meta name="msapplication-TileImage" content="mstile.png">

		<!--  CSS Files -->
		<link rel="stylesheet" href="../lib/styles/css/screen.css" type="text/css">
		
		<!-- CSS-related scripts: Place Typekit , Google Font, and/or Fontastic script(s) here-->
		<script src="../lib/js/custom.modernizr.js" type="text/javascript"></script>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800|Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

		<!-- CSS to make IE place nice with Foundation	  -->
		<!--[if lt IE 9]>
			<link rel="stylesheet" href="lib/styles/css/ie.css">
			<script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script>
			<script src="//s3.amazonaws.com/nwapi/nwmatcher/nwmatcher-1.2.5-min.js"></script>
			<script src="//html5base.googlecode.com/svn-history/r38/trunk/js/selectivizr-1.0.3b.js"></script>
			<script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.1.0/respond.min.js"></script>
		<![endif]-->
		

		

	</head>

	<body class="styleguide">
		<aside class="styleguide-sidebar">
			<nav>
				<h6>Skin</h6>
				<a href="#color">Color</a>
				<a href="#font">Font</a>
				<a href="#favicons">Favicons</a>

				<h6>Structure</h6>
				<a href="#grid">Grid</a>
				<a href="#blockgrid">Block Grid</a>
				<a href="#visibility">Visibility</a>
				<a href="#mediaqueries">Media Queries</a>
				<a href="#equalizer">Equalizer</a>
				<a href="#helpers">Helper Classes</a>


				<h6>Media</h6>
				<a href="#images">Responsive Images</a>
				<a href="#video">Responsive Video</a>
				<a href="#carousel">Carousel</a>

				<h6>Callouts</h6>
				<a href="#modal">Reveal Modal</a>
				<a href="#tooltips">Tooltips</a>
				<a href="#alerts">Alerts</a>

				<h6>Forms</h6>
				<a href="#forms">Forms</a>

				<h6>Buttons</h6>
				<a href="#buttons">Buttons</a>
				<a href="#dropdowns">Dropdowns</a>

				<h6>Typography</h6>
				<a href="#type">Type</a>
				<a href="#lists">Lists</a>

				<h6>Navigation</h6>
				<a href="#breadcrumbs">Breadcrumbs</a>
				<a href="#pagination">Pagination</a>

				<h6>Content</h6>
				<a href="#tables">Tables</a>
				<a href="#icons">Icons</a>
				<a href="#tabs">Tabs</a>
				<a href="#accordions">Accordions</a>
				
			</nav>
		</aside>
		<section role="main">
			<div id="colors">		<?php include '.colors.php' ?></div>
			<div id="font">			<?php include '.font.php' ?></div>
			<div id="favicons">	<?php include '.favicons.php' ?></div>
			<div id="grid">			<?php include '.grid.php' ?></div>
			<div id="blockgrid">	<?php include '.blockgrid.php' ?></div>
			<div id="visibility">		<?php include '.visibility.php' ?></div>
			<div id="mediaqueries"><?php include '.mediaqueries.php' ?></div>
			<div id="equalizer">	<?php include '.equalizer.php' ?></div>
			<div id="helpers">		<?php include '.helpers.php' ?></div>

			<div id="images">		<?php include '.responsive-images.php' ?></div>
			<div id="video">		<?php include '.responsive-video.php' ?></div>
			<div id="carousel">	<?php include '.carousel.php' ?></div>

			<div id="modal">		<?php include '.reveal-modal.php' ?></div>
			<div id="tooltips">		<?php include '.tooltips.php' ?></div>
			<div id="alerts">		<?php include '.alerts.php' ?></div>
			
			<div id="forms">		<?php include '.forms.php' ?></div>

			<div id="buttons">		<?php include '.buttons.php' ?></div>
			<div id="dropdowns">		<?php include '.dropdowns.php' ?></div>

			<div id="type">		<?php include '.text.php' ?></div>
			<div id="lists">			<?php include '.lists.php' ?></div>

			<div id="breadcrumbs"><?php include '.breadcrumbs.php' ?></div>
			<div id="pagination">	<?php include '.pagination.php' ?></div>

			<div id="tables">		<?php include '.tables.php' ?></div>
			<div id="icons">		<?php include '.icons.php' ?></div>
			<div id="tabs">		<?php include '.tabs.php' ?></div>
			<div id="accordions">	<?php include '.accordion.php' ?></div>
			
			<a href="javascript:" id="toTop"><i class="i-up-open"></i></a>
		</section>

		<!-- SCRIPTS-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="../lib/js/jquery-1.10.2.min.js"><\/script>')</script>

		<!-- Foundation 5-->
		<script src="../lib/js/foundation/foundation.js" type="text/javascript"></script>
		<script src="../lib/js/foundation/foundation.dropdowns.js" type="text/javascript"></script>
		<script src="../lib/js/foundation/foundation.equalizer.js" type="text/javascript"></script>
		<script src="../lib/js/foundation/foundation.alerts.js" type="text/javascript"></script>
		<script src="../lib/js/foundation/foundation.interchange.js" type="text/javascript"></script>
		<script src="../lib/js/foundation/foundation.reveal.js" type="text/javascript"></script>
		<script src="../lib/js/foundation/foundation.tab.js" type="text/javascript"></script>
		<script src="../lib/js/foundation/foundation.tooltip.js" type="text/javascript"></script>

		<!-- Plugins -->
		<script src="../lib/js/plugins/owl.carousel.js" type="text/javascript"></script>
		<script src="../lib/js/plugins/accordion.js" type="text/javascript"></script>

		<!-- Initialize -->
		<script type="text/javascript">
			$(document).foundation();
		</script>


		<!-- ONLY FOR THIS STYLEGUIDE -->
		 <script type="text/javascript">

			//scroll to	
			$(function() {
				$('.styleguide-sidebar a[href*=#]:not([href=#])').click(function() {
					if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
						var target = $(this.hash);
						target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
						if (target.length) {
							$('html,body').animate({
								scrollTop: target.offset().top
							}, 1000);
							return false;
						}
					}
				});
			});

			//to the top! (fade in/out)		
			$(window).scroll(function() {
				if ($(this).scrollTop()) {
					$('#toTop').fadeIn(200);
				} else {
					$('#toTop').fadeOut(200);
				}
			});

			$("#toTop").click(function() {
				$("html, body").animate({scrollTop: 0}, 1000);
			 });

			//init carousel	
			$(document).ready(function () {
				
				$('.carousel').owlCarousel({
					loop:true,
					margin:10,
					responsiveClass:true,
					responsive:{
						0:{
								items:1,
								nav:true
						},
						600:{
								items:3,
								nav:false
						},
						1024:{
								items:5,
								nav:true,
								loop:false
						}
					}
				});
				$('.slider').owlCarousel({
					items:1,
					margin:10
				});	

			});
		</script>

	</body>
</html>