<?php get_header(); ?>

<section>
    <!-- THE DEFAULT LOOP -->
    <?php get_template_part( 'template-parts/component', 'loop' ); ?>

	<!-- COMMENTS -->
	<?php get_template_part( 'template-parts/component', 'comments' ); ?>
</section>	

<?php get_footer(); ?>