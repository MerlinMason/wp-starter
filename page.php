<?php get_header(); ?>
	
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<article>
			<h1><?php the_title(); ?></h1>			
			<?php the_content(); ?>
		</article>
	<?php endwhile; ?>

<?php get_footer(); ?>