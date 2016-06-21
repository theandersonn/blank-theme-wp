<?php get_header(); ?>

<section>
    <h2>Posts de <?php single_month_title(' '); ?></h2>

    <!-- THE DEFAULT LOOP -->
    <?php get_template_part( 'loop', 'default' ); ?>

	<!-- GET PAGINATION -->
	<?php //btwp_pagination(); ?>

    <!-- PAGINATION HTML -->
    <?php get_template_part( 'pagination', 'html' ); ?> 
</section>

<?php get_footer(); ?>
