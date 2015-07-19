<?php get_header(); ?>

<section>
    <!-- CONTEÚDO PADRÃO DAS PÁGINAS ESTÁTICAS -->
    <?php if ( have_posts() ) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
