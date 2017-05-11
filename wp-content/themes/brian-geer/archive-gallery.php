<?php
/* 
====================
	ARCHIVE GALLERY
====================
*/
get_header();
$header_image_large = get_field('gallery_hero', 'option')
?>
	<header class="page-header" role="banner">
		<div class="hero-sub background-cover"
			 style="background-image: url('<?php echo $header_image_large['sizes']['sub-page']; ?>');"></div>
	</header>
	<div id="primary" class="content-area portfolio">
		<div class="row base-content">
			<div class="large-3 columns">
				<h1>Gallery</h1>
			</div>
			<div class="large-9 columns">
				<p>We have supplied the gallery of photos below, each of which is accompanied by a description of the
					project, and in some cases, photos of the various developmental stages. When individual buyers
					offered testimonials about the project, those are also included.</p>
			</div>
		</div>

		<?php get_template_part('templates/loop', 'gallery'); ?>

		<div class="row">
			<div class="large-12 columns">
				<p>From this portfolio, it should be possible for anyone who is considering the construction of a custom
					luxury home in Southwest Utah to appreciate the expertise brought to such projects by the Brian Geer
					Development and Construction company. Your own beautiful new home can incorporate some of the ideas
					used in these homes shown below, or it can be something entirely different - an expression of your
					own tastes and personality. In any case, you can rest assured that the same quality and natural
					beauty built into the homes in this portfolio will also be featured elements of your own custom
					home.</p>
			</div>
		</div>
	</div>
<?php get_footer(); ?>