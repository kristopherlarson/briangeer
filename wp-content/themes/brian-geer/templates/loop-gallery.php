<?php
/* 
====================
    PORTFOLIO HOME LOOP
====================
*/?>

<div class="row featured-gallery">

<?php $args            = array(
    'post_type'      => 'gallery',
    'post_status'    => 'publish',
    'posts_per_page' =>  -1,
);

$gallery_query = new WP_Query( $args );

if ( $gallery_query->have_posts() ) {
    while ( $gallery_query->have_posts() ) {
        $gallery_query->the_post();

        $project_image = get_field( 'gallery_photos' );
        $project_image_id = $project_image[0]['id'];


        $slider_img_src     = wp_get_attachment_image_url( $project_image_id, 'gallery-large' );
        $slider_img_srcset  = wp_get_attachment_image_srcset( $project_image_id, 'gallery-large' );


        ?>

        <div class="medium-6 columns">
            <div class="gallery-photo">
                <a href="<?php echo get_permalink(); ?>">
                    <img class="lazyload"
                         src="<?php echo $slider_img_src; ?>"
                         srcset="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                         data-srcset="<?php echo $slider_img_srcset; ?>"
                         alt="<?php echo $project_image['alt']; ?>"
                         data-sizes="100vw" />
                    <div class="project-title">

                        <?php if( get_field('parade_home') ): ?>

                            <div class="parade-home"><p>Parade Home</p></div>

                        <?php endif; ?>

                        <p class="cta-blue">READ MORE
                            <svg class="icon icon-arrow">
                                <use xlink:href="#icon-right-arrow"/>
                            </svg>
                        </p>
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="corner-ribbon top-right"></div>
                </a>
            </div>
        </div>

        <?php
    }
    if( function_exists('amped_pagination') ) {
        amped_pagination();
    }
} else { ?>
    <article>
        <header>
            <h1>Article Not Found!</h1>
            <p>Sorry, no posts.</p>
        </header>
    </article>
    <?php
}
wp_reset_postdata();
?>

</div>
