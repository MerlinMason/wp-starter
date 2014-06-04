    <footer class="page-footer">
        <p class="copyright">&copy; <?php bloginfo('name'); ?>, <?php echo date('Y'); ?>. All rights reserved.</p>
    </footer>

</div><?php // </.container> ?>

<?php
    $production = false;
    $theme = get_template_directory_uri();

    // if we're in production mode, include minified concatenated script
    // if not then pull them in unminified individually for easier debugging
    if ($production) {

        echo '<script src ="' . $theme . '/js/production.js"></script>';

    } else {

        echo '<script src ="' . $theme . '/js/modernizr-custom.js"></script>';
        echo '<script src ="' . $theme . '/js/bower/jquery/dist/jquery.js"></script>';
        echo '<script src ="' . $theme . '/js/bower/jquery-smartresize/jquery.debouncedresize.js"></script>';
        echo '<script src ="' . $theme . '/js/project.js"></script>';
        echo '<script src="//localhost:35729/livereload.js"></script>';

    }
?>
<?php wp_footer(); ?>


</body>
</html>
