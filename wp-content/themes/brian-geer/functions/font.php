<?php 
/* 
====================
	FONTS
====================
*/

add_action( 'wp_head', 'amped_fonts', 0, 0 );

function amped_fonts() {

    ?>

    <script>
        WebFontConfig = {
            google : { families: [ 'Muli:400,600,700,800', 'Open+Sans:400,600,700' ] },
            //typekit: { id: 'ecr7jpu' }

        };
        (function() {
            var wf = document.createElement( 'script' );
            wf.src = ('https:' == document.location.protocol ? 'https' : 'http') + '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
            wf.type = 'text/javascript';
            wf.async = 'true';
            var s = document.getElementsByTagName( 'script' )[0];
            s.parentNode.insertBefore( wf, s );
        })();
    </script>

    <?php

}