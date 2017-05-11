<?php
/* 
====================
	TEMPLATE NAME: Accreditations
====================
*/
get_header(); 
?>
<?php get_template_part( 'templates/page', 'header' ); ?>
<div id="primary" class="content-area">
	<main>
		<div class="row base-content">
		    <div class="large-5 columns">
				<h1><?php the_title() ?></h1>
				<?php echo get_field('left_side_content') ?>
		    </div>
			<div class="large-6 large-offset-1  columns">
				<?php get_template_part( 'templates/loop', 'page' ); ?>
			</div>
		</div>

		<div class="background-cover accred-back lazyload" data-bgset="<?php echo THEME_IMAGES; ?>home/gated-communities-st-george-ut.jpg"></div>

		<div class="row base-content">
			<div class="large-5 columns">
				<h1><?php echo get_field('left_side_second_title_box') ?></h1>
			</div>
			<div class="large-6 large-offset-1  columns">
				<?php echo get_field('left_side_second_content_box') ?>
			</div>
		</div>

		<?php get_template_part('panels/recent-projects-page'); ?>
	</main>
</div>
<?php get_footer(); ?>