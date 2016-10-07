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

<main class="main">
    <div class="container">
        <div class="row">
            <div class="responsive-form clearfix">
                <?php echo do_shortcode('[contact-form-7 id="" title=""]'); ?>
            </div>             
        </div>
    </div>
</main>

<?php get_footer(); ?>