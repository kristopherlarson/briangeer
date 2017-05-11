<?php


$project_image_one = get_field( 'recent_project_photo_one', 'option' );
$project_image_two = get_field( 'recent_project_photo_two', 'option'  );


?>


<section class="recent-projects">
    <div class="row">
        <div class="large-5 columns">
            <div class="heading-wrap">
                <h2>Recent Projects</h2>
                <p class="cta-blue">
                    <a href="/gallery/">VIEW GALLERY
                        <svg class="icon icon-arrow">
                            <use xlink:href="#icon-right-arrow"/>
                        </svg>
                    </a>
                </p>
            </div>
        </div>
        <div class="large-7 columns base-content">
            <div class="row">
                <div class="medium-6 columns">
                    <a href="/gallery/" class="hover-wrap">
                        <img class="lazyload" data-src="<?php echo $project_image_one['sizes']['gallery-medium']; ?>" alt="<?php echo $project_image_one['alt']; ?>">
                        <div class="corner-ribbon top-right"></div>
                        <p class="cta">VIEW HOMES
                            <svg class="icon icon-arrow">
                                <use xlink:href="#icon-right-arrow"/>
                            </svg>
                        </p>
                    </a>
                </div>
                <div class="medium-6 columns">
                    <a href="/gallery/" class="hover-wrap">
                        <img class="lazyload" data-src="<?php echo $project_image_two['sizes']['gallery-medium']; ?>" alt="<?php echo $project_image_two['alt']; ?>">
                        <div class="corner-ribbon top-right"></div>
                        <p class="cta">VIEW HOMES
                            <svg class="icon icon-arrow">
                                <use xlink:href="#icon-right-arrow"/>
                            </svg>
                        </p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>