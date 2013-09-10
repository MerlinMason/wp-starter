<?php get_header(); ?>

	<h1><span>You're looking at:</span><?php printf( __( ' %s' ), '' . single_cat_title( '', false ) . '' ); ?></h1>
	
	<?php while ( have_posts() ) : the_post(); ?>
		<article>
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>
	
	<?php if (  $wp_query->max_num_pages > 1 ) : ?>
		<nav id="postnav" class="group">
			<span class="prev"><?php previous_posts_link( __( '&#9756; More Recent Posts') ); ?></span>
			<span class="next"><?php next_posts_link( __( 'Older Posts &#9758;') ); ?></span>
		</nav>
	<?php endif; ?>

<?php get_footer(); ?>