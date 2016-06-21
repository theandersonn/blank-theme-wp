<?php get_header(); ?>

<section>
    <h2>Resultado da busca pelo termo '<?php echo esc_html ( get_query_var('s') ); ?>'</h2>

    <!-- THE DEFAULT LOOP -->
    <?php get_template_part( 'component', 'loop' ); ?>

    <!-- GET PAGINATION -->
    <?php //btwp_pagination(); ?>

    <!-- PAGINATION HTML -->
    <?php get_template_part( 'component', 'pagination-html' ); ?>
</section>

<?php get_footer(); ?>
