<?php get_header(); ?>

<main class="main">
	<div class="container">
		<div class="row">
		    <!-- THE DEFAULT LOOP -->
		    <?php get_template_part( 'template-parts/component', 'loop' ); ?>

		    <!-- GET PAGINATION -->
		    <?php //btwp_pagination(); ?>

		    <!-- PAGINATION HTML -->
		    <?php get_template_part( 'template-parts/component', 'pagination-html' ); ?>			
		</div>
	</div>
</main>

<?php get_footer(); ?>

<?php get_footer(); ?>
