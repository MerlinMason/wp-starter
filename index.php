<?php 
	get_header();
	
	if (is_front_page()) { // the default homepage
	
		echo "<h1>This is the home page</h1>";
		the_title();
		the_content();

	} elseif (in_category(blog)) { // post category

		while ( have_posts() ) : the_post();
			echo "<h1>This is the blog</h1>";
			the_title();
			echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';
			the_content();
		endwhile;

		if (  $wp_query->max_num_pages > 1 ) :
				?><nav class="postnav" class="cf">
					<span class="prev fl"><?php previous_posts_link( __( 'More Recent Posts') ); ?></span>
					<span class="next fr"><?php next_posts_link( __( 'Older Posts') ); ?></span>
				</nav><?php
		endif;

	} elseif (is_page('about')) { // sub page

		echo "<h1>This is a page template</h1>";
		the_title();
		the_content();

	} else { // 404 if we're lost

		include("404.php");

	}

	get_footer();

?>
