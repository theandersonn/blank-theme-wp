<?php get_header(); ?>

<section>
	<!-- THE DEFAULT LOOP -->
	<?php get_template_part( 'loop', 'default' ); ?>

	<!-- COMMENTS -->
	<?php get_template_part( 'comments' ); ?>
</section>	

<?php get_footer(); ?>
