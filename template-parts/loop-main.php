<!-- START LOOP MAIN -->
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<?php get_template_part('template-parts/content', 'default'); ?>
<?php endwhile; ?>

<?php else: ?>
	<?php get_template_part('template-parts/content', 'none'); ?>
<?php endif; ?>