<footer class="page-footer">
	<p class="copyright">&copy; <?php bloginfo('name'); ?>, <?php echo date('Y'); ?>. All rights reserved.</p>
</footer>

</div>

<?php

	wp_footer();

	$production = false;

	// if we're in production mode, include minified concatenated script
	// if not then pull them in unminified individually for easier debugging
	if (production) {

		echo '<script src ="' . bloginfo("template_url") . '/js/production.js"></script>';

	} else {

		echo '<script src ="' . bloginfo("template_url") . '/js/bower/jquery/jquery.js"></script>';
		echo '<script src ="' . bloginfo("template_url") . '/js/bower/modernizr/modernizr.js"></script>';
		echo '<script src ="' . bloginfo("template_url") . '/js/project.js"></script>';

	}

?>


</body>
</html>