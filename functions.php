<?php

    // stop wordpress from loading it's own version of jQuery
    function wpstarter_custom_js() {
        wp_deregister_script('jquery');
    }
    if (!is_admin()) add_action('wpstarter_enqueue_scripts', 'wpstarter_custom_js', 11);

    // extend this file with www.wpfunction.me

?>
