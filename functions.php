<?php 

// call minifed jQuery from bower
function wpstarter_jquery_enqueue() {
	wp_deregister_script('jquery');
	wp_register_script('jquery', "/wp-content/themes/wp-starter/bower_components/jquery/jquery.min.js", false, null);
	wp_enqueue_script('jquery');
}
if (!is_admin()) add_action("wpstarter_enqueue_scripts", "wpstarter_jquery_enqueue", 11);

// extend this file with www.wpfunction.me

?>
