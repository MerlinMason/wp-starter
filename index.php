<?php 
	get_header();
		
		echo '<h1>Welcome to wp-starter!</h1>';

		while ( have_posts() ) : the_post();
			the_title();
			echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago';
			the_content();
		endwhile;

		if (  $wp_query->max_num_pages > 1 ) : ?>
			<nav class="postnav" class="cf">
				<span class="prev fl"><?php previous_posts_link( __('More Recent Posts')); ?></span>
				<span class="next fr"><?php next_posts_link( __('Older Posts')); ?></span>
			</nav>
		<?php endif;

	get_footer();

?>
