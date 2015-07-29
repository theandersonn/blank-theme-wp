<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>

    <h1><?php the_title(); ?></h1>
	<p><?php the_content(); ?></p>

<?php endif; ?>

<!-- COMENTÁRIOS -->
<div class="containner_comments">
    <?php comments_template(); ?>
</div>

<?php get_footer(); ?>
