<?php

    // stop wordpress from loading it's own version of jQuery
    add_action( 'wp_enqueue_script', 'load_jquery' );
    function load_jquery() {
        wp_enqueue_script( 'jquery' );
    }

    // extend this file with www.wpfunction.me

?>
