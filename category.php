<?php get_header(); ?>

<section>

    <h2>Categoria: <?php single_cat_title(); ?></h2>

    <!-- CONTEÚDO PADRÃO DAS PÁGINAS ESTÁTICAS -->
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>

    <?php endwhile; ?>

    <?php else : ?>
        <p>Nenhum conteúdo encontrado.</p>
    <?php endif; ?>

    <!-- OBTER PAGINAÇÃO -->
    <?php btwp_pagination(); ?>

    <!-- <div class="pagination">
        <ul class="page-numbers">
            <li><span class="page-numbers current">1</span></li>
            <li><a href="" class="page-numbers">2</a></li>
            <li><a href="" class="page-numbers">3</a></li>
            <li><span class="page-numbers dots">…</span></li>
            <li><a href="/" class="page-numbers">90</a></li>
            <li><a href="" class="next page-numbers">Next »</a></li>
        </ul>
    </div> -->
</section>

<?php get_footer(); ?>
