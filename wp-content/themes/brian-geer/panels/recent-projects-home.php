<?php

$project_image_one = get_field( 'recent_project_photo_one', 'option' );
$project_image_two = get_field( 'recent_project_photo_two', 'option'  );

?>

<section class="recent-projects front-page base-content">

    <div class="row">
        <div class="large-5 columns">
            <h2>Recent Projects</h2>
            <p>Many of the stunning Southern Utah homes built by Brian Geer Development and Construction can be seen
                throughout Washington County, in Dammeron Valley, including Pinon Hills, Entrada which is along Snow
                Canyon
                Parkway, Kayenta and around the city of Ivins. Locations around St. George, Utah are ideal for home
                construction, with all that the area has to offer in the way of recreation, beautiful scenery,
                employment
                opportunities, and spectacular parks.</p>
        </div>

        <div class="large-7 columns">
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
                <div class="large-12 columns">
                        <p class="cta-blue">
                            <a href="/gallery/">RECENT PROJECTS
                                <svg class="icon icon-arrow">
                                    <use xlink:href="#icon-right-arrow"/>
                                </svg>
                            </a>
                        </p>
                </div>
            </div>
        </div>

        <div class="large-12 columns amped-content">
            <p>In July of 2016, the company began development of a project in the luxury vacation community of
                Encanto, Utah, situated along the Snow Canyon Parkway, not far from Tuacahn. Houses for sale in this
                area are privileged to be situated near spectacular red rock formations and extensive lava
                flows.</p>

            <p>These projects, like all construction efforts undertaken by Brian Geer, take best advantage of local
                surroundings, to create dwellings which meld with the environment, and at the same time, become
                jewels in their specific settings.</p>
        </div>
    </div>

</section>