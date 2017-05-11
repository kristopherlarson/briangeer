<?php
/* 
====================
	TEMPLATE NAME: Contact
====================
*/
get_header(); 
?>
<?php get_template_part( 'templates/page', 'header' ); ?>
<div id="primary" class="content-area">
	<main>
		<div class="row base-content amped-content">
			<aside class="medium-6 large-5 large-offset-1 columns" role="complementary">
				<h1>Contact Info</h1>
				<?php get_template_part( 'templates/loop', 'page' ); ?>
			</aside>
			<div class="medium-6 large-5 large-offset-1 columns end">
				<?php get_template_part( 'templates/form', 'contact' ); ?>
			</div>
		</div>
	</main>
</div>
	<div id="gmap" class="gmaps"></div>
<?php get_footer(); ?>