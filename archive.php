<?php get_header(); ?>

<section>
    <!-- THE DEFAULT LOOP -->
    <?php get_template_part( 'component', 'loop' ); ?>

    <!-- GET PAGINATION -->
    <?php //btwp_pagination(); ?>

    <!-- PAGINATION HTML -->
    <?php get_template_part( 'component', 'pagination-html' ); ?>
</section>

<?php get_footer(); ?>