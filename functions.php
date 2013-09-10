<?php 

// call minifed JS file which includes jQuery
function wpfme_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "/wp-content/themes/THEMENAME/js/production-min.js", false, null);
	wp_enqueue_script('jquery');
}
if (!is_admin()) add_action("wp_enqueue_scripts", "wpfme_jquery_enqueue", 11);

// extend this file with www.wpfunction.me

?>
