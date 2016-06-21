<?php get_header(); ?>

<section>
    <!-- THE DEFAULT LOOP -->
    <?php get_template_part( 'component', 'loop' ); ?>

	<!-- COMMENTS -->
	<?php get_template_part( 'component', 'comments' ); ?>
</section>	

<?php get_footer(); ?>