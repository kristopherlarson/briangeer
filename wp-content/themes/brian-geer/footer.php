<?php
/* 
====================
	FOOTER
====================
*/
?>
</div> <!-- /.site-content -->

</div><!-- /#main-container -->

<footer class="footer">

    <div class="row top-section">
        <div class="large-8 columns">
            <h4>the right choice from the start</h4>

            <div class="contact-us-foot">
                <div class="logo-g">
                    <svg class="icon icon-logo-g">
                        <use xlink:href="#icon-logo-g"/>
                    </svg>
                </div>
                <div class="address">
                    <p>Brian Geer Development & Construction, Inc. <br/>
                        144 W. Brigham Rd. Bldg. E #1<br/>
                        St. George, Utah 84790 </p>
                </div>

            </div>

        </div>
        <div class="large-4 columns">
            <div class="cta-foot">
                <a href="/contact/" class="button">get in touch today
                    <svg class="icon icon-arrow">
                        <use xlink:href="#icon-right-arrow"/>
                    </svg>
                </a>
                <p class="tele"><a href="tel:1-435-656-1185">435-656-1185</a></p>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="large-12 columns">
            <h6 class="copyright">
                &copy; <?php echo date('Y'); ?>
                <a href="<?php echo esc_url(home_url()); ?>" rel="bookmark">
                    <?php bloginfo('name'); ?>
                </a>
                <span class="rights-reserved"><?php _e('All Rights Reserved', 'amped-theme'); ?> | <a
                        href="https://tenthmusedesign.com" target="_blank" rel="nofollow">Inspired by Tenth Muse Design</a> </span>
            </h6>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<?php include_once('images/svg/dist/svg-master.svg'); ?>

</body>
</html>
