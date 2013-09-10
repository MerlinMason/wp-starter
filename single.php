<?php get_header(); ?>

<section>

	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
		<h1><?php the_title(); ?></h1>
		<h2><?php echo human_time_diff( get_the_time('U'), current_time('timestamp') ) . ' ago'; ?></h2>
		<?php the_content(); ?>
		
		<nav class="singlepostnav" class="cf">
			<span class="prev fl"><?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link') . ' %title' ); ?></span>
			<span class="next fr"><?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link') . '' ); ?></span>
		</nav>
		
		<?php comments_template( '', true ); ?>
	
	<?php endwhile; ?>

</section>

<?php get_footer(); ?>