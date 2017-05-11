<?php
/*
====================
	Home Page
====================
*/
get_header();
?>
<main>
    <?php get_template_part('templates/loop', 'slider'); ?>

    <section class="brian-geer-way">

        <div class="row">
            <div class="large-6 columns">
                <div class="content-wrap base-content">
                    <h1>Building the <br>
                        Brian Geer Way</h1>
                </div>
            </div>
            <div class="large-6 columns">
                <?php get_template_part('templates/loop', 'page'); ?>
            </div>
        </div>

    </section>


    <?php get_template_part('panels/recent-projects-home'); ?>


    <section class="back-sec lazyload background-cover"
             data-bgset="<?php echo THEME_IMAGES; ?>home/custom-home-builder-st-george.jpg">

        <div class="row base-content">
            <div class="large-5 columns">
                <h2>Honesty & Transparency</h2>
            </div>

            <div class="large-7 columns amped-content">
                <p>Anyone about to make a major investment in something, including a brand new home, likes to know that
                    the investment is protected, and that full value will be returned. That’s exactly what can be
                    expected from a home investment with Brian Geer Development and Construction. Testimonials from
                    ecstatic clients will vouch for the fact that Brian Geer is a stand-up, honest professional,
                    committed to doing things right and giving his best every time.</p>

                <p>A big part of honesty in business is transparency – keeping everything visible to the client, and
                    hiding nothing. This is the only way for there to be a true collaboration between client and
                    contractor, and to have a mutual trust between the two parties. At each phase of development and
                    construction, clients are kept fully informed of progress being made, and objectives being reached,
                    so there are never any surprises.</p>
            </div>
        </div>

        <div class="corner-ribbon top-right"></div>

    </section>


    <section class="accreditations">

        <div class="row base-content">
            <div class="large-6 columns">
                <div class="content-wrap amped-content">
                    <h2>Accreditations</h2>
                    <p>There are several ways that the business practices and professionalism of a contractor can be
                        verified, one of which is via testimonials provided by satisfied customers. While glowing
                        testimonials and reviews like those on Angie’s List are constantly being added to the catalog of
                        happy Brian Geer clients, there are also other indicators of just how well respected the company
                        is.</p>
                    <p class="cta-blue">
                        <a href="/accreditations/">READ MORE
                            <svg class="icon icon-arrow">
                                <use xlink:href="#icon-right-arrow"/>
                            </svg>
                        </a>
                    </p>
                </div>
            </div>

            <div class="large-6 columns right-side">
                <img class="lazyload" data-src="<?php echo THEME_IMAGES; ?>home/accreds.jpg" alt="Accreditation's">
            </div>
        </div>

    </section>


    <?php

    if (have_rows('testimonial')): ?>

        <section class="back-sec testi lazyload background-cover"
                 data-bgset="<?php echo THEME_IMAGES; ?>home/luxury-homes-st-george-utah.jpg">

            <div class="row base-content">

                <div class="large-4 columns">
                    <h2>testimonials</h2>
                </div>

                <div class="large-8 columns amped-content">

                    <div class="featured-testi">

                        <?php while (have_rows('testimonial')) : the_row(); ?>

                            <div class="testi-wrap">

                                <?php the_sub_field('testimonial_content'); ?>

                                <?php

                                $author = get_sub_field('testimonial_author');

                                if ($author) { ?>

                                    <p class="author"><?php echo $author; ?></p>

                                <?php } ?>

                            </div>

                        <?php endwhile; ?>

                    </div>

                </div>

            </div>

            <div class="corner-ribbon bottom-left"></div>

        </section>

    <?php endif; ?>


</main>
<?php get_footer(); ?>
