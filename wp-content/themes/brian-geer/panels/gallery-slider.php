<?php
/*
====================
    SLIDER GALLERY
====================
*/


?>
<section class="gallery-slider">

	<?php
	$slider_images = get_field( 'gallery_photos' );

	if ( ! empty( $slider_images ) ):

		foreach ( $slider_images as $slider_image ): ?>

			<figure>

				<div class="full-screen-hero-background media-cover background-cover lazyload"
				     data-expand="-20"
				     data-bgset="<?php echo $slider_image['sizes']['slider-image-small']; ?> [(max-width: 960px)] |
							<?php echo $slider_image['sizes']['slider-image']; ?> [(max-width: 1280px)] |
							<?php echo $slider_image['sizes']['slider-image-retina']; ?>"
				     data-sizes="auto" role="img" aria-label="<?php the_title(); ?>">
				</div>

			</figure>

		<?php endforeach; ?>

	<?php endif; ?>
</section>