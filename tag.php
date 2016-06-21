<?php get_header(); ?>

<section>
    <h2>Post(s) com a Tag <?php single_tag_title(); ?></h2>

    <!-- THE DEFAULT LOOP -->
    <?php get_template_part( 'loop', 'default' ); ?>

	<!-- GET PAGINATION -->
	<?php //btwp_pagination(); ?>

    <!-- PAGINATION HTML -->
    <?php get_template_part( 'pagination', 'html' ); ?>    
</section>

<?php get_footer(); ?>
