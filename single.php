<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <h2><?php the_title(); ?></h2>
    <?php the_content(); ?>

<?php endwhile; ?>

<?php else : ?>
    <p>Nenhum conteúdo encontrado.</p>
<?php endif; ?>

<!-- COMENTÁRIOS -->
<div class="containner_comments">
    <?php comments_template(); ?>
</div>

<?php get_footer(); ?>
