<?php
/* 
====================
	SINGLE
====================
*/

get_header();

$testimonial = get_field('testimonial_testimonial');

?>
<?php get_template_part('panels/gallery-slider'); ?>
    <div id="primary" class="content-area">
        <div class="row">

            <div class="medium-8 large-4 columns base-content">
                <h1><?php the_title() ?></h1>
                <?php if($testimonial) { ?>
                    <p class="testi-head">HOMEOWNER TESTIMONIAL</p>
                    <?php echo $testimonial ?>
                 <?php } ?>

            </div>

            <div class="large-7 large-offset-1 columns">
                <div class="gallery-photos">


                    <?php
                    $gallery_images = get_field('gallery_photos');


                    if (!empty($gallery_images)):


                        foreach ($gallery_images as $gallery_image): ?>


                            <a href="<?php echo $gallery_image['sizes']['slider-image']; ?>"
                               class="slider-image the-image">
                                <img class="lazyload" data-src="<?php echo $gallery_image['sizes']['thumbnail']; ?>"
                                     alt="<?php echo $gallery_image['alt']; ?>"/>
                            </a>

                            <?php if ($count++ == 14) {
                                break;
                            } ?>

                        <?php endforeach; ?>

                    <?php endif; ?>

                    <button class="view-all the-image">VIEW ALL
                        <svg class="icon icon-chevron">
                            <use xlink:href="#icon-chevron-right"/>
                        </svg>
                    </button>

                    <script>
                        jQuery(document).ready(function ($) {
                            $('.the-image').on('click', function (e) {
                                e.preventDefault();
                                Fresco.show([
                                    <?php
                                    foreach ($gallery_images as $gallery_image) {
                                        echo '{ url: "' . $gallery_image['sizes']['slider-image'] . '"},';
                                    }
                                    ?>
                                ]);
                            });
                        });
                    </script>

                </div>
            </div>

        </div>
    </div>
<?php get_footer(); ?>