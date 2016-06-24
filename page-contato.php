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

<main>
    <div class="container">
        <div class="row">
            <!-- THE DEFAULT LOOP -->
            <?php get_template_part( 'template-parts/component', 'loop' ); ?>            
        </div>
    </div>
</main>

<?php get_footer(); ?>