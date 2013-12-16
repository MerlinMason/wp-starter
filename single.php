<?php get_header();

    if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <h1><?php the_title(); ?></h1>
        <h2><?php echo human_time_diff( get_the_time('U'), current_time('timestamp')) . ' ago'; ?></h2>
        <?php the_content(); ?>

        <nav class="postnav cf">
            <span class="prev fl"><?php previous_post_link( '%link', '' . _x( '', 'Previous Post') . ' %title'); ?></span>
            <span class="next fr"><?php next_post_link( '%link', '%title ' . _x('', 'Next Post') . ''); ?></span>
        </nav>

        <?php comments_template('', true);

    endwhile;

get_footer(); ?>
