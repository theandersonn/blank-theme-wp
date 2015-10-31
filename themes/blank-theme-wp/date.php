<?php get_header(); ?>

<section>

    <h2>Posts de <?php single_month_title(' '); ?></h2>

    <!-- CONTEÚDO PADRÃO DAS PÁGINAS ESTÁTICAS -->
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

    <?php endwhile; ?>

    <?php else : ?>
    	<p>Nenhum conteúdo encontrado.</p>
    <?php endif; ?>
</section>

<?php get_footer(); ?>
