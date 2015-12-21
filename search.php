<?php get_header(); ?>

<h2>
    Resultado da busca pelo termo '<?php echo esc_html ( get_query_var('s') ); ?>'
</h2>

<!-- aqui loop de posts -->

<!-- obter paginação -->
<?php btwp_pagination(); ?>

<?php get_footer(); ?>
