<?php
/* 
====================
	HEADER
====================
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link href="<?php echo THEME_IMAGES; ?>/favicon.png" rel="icon" type="image/x-icon">
	<meta name="google-site-verification" content="qef0__q6O6NFcSPgqPzZPuD1OlpO2-ZAlUkKsNc6Pgg" />

	<title><?php echo get_field('title_tag') ?></title>
	<meta name="description" content="<?php echo get_field('meta_tag') ?>">
	
	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
				(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-70289166-24', 'auto');
		ga('send', 'pageview');

	</script>

	<div id="main-container">

		<header id="masthead" class="site-header" data-sticky-container>
			<div class="stick-wrap sticky" data-sticky data-margin-top="0" data-top-anchor="15">

				<div class="row">
					<div class="large-12 columns head-wrap">
						<a href="<?php echo home_url(); ?>" class="logo">
							<img src="<?php echo THEME_IMAGES; ?>/brian-geer-construction-logo.png" alt="logo">
							<svg class="icon icon-logo small"><use xlink:href="#icon-logo-small" /></svg>
						</a>
						<nav class="main-nav" aria-label="Site Navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
							<div class="header-cta">
								<p>GET IN TOUCH</p> | <p><a href="tel:1-435-656-1185"><b>435-656-1185</b></a></p>
							</div>
							<button class="mobile-trigger" type="button">
							<span class="mobile-trigger-box">
								<span class="mobile-trigger-inner"></span>
							</span>
							</button>
							<?php get_template_part( 'templates/menu', 'nav' ); ?>
						</nav>
					</div>
				</div>

			</div>
		</header>

	<div class="<?php echo is_front_page() ? 'home' : 'page' ?>-content site-content">