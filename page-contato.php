<?php get_header(); ?>

	<!-- LOAD THE FILES ON PAGES WHICH CONTAIN CONTACT FORMS -->
    <?php
        if ( function_exists( 'wpcf7_enqueue_scripts' ) ) {
            wpcf7_enqueue_scripts();
        }

        if ( function_exists( 'wpcf7_enqueue_styles' ) ) {
            wpcf7_enqueue_styles();
        }
    ?>

<section>
    <!-- THE DEFAULT LOOP -->
    <?php get_template_part( 'template-parts/component', 'loop' ); ?>
</section>

<?php get_footer(); ?>