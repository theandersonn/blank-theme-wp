<!-- START LOOP MAIN -->
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
	<h2><?php the_title(); ?></h2>
	<p><?php the_content(); ?></p>
<?php endwhile; ?>

<?php else: ?>
	<p>Não temos posts publicados</p>
<?php endif; ?>
