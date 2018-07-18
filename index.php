<?php get_header(); /* Template Name: Blog */ ?>

<main class="main">
	<div class="container">
		<div class="row">
		    <!-- THE DEFAULT LOOP -->
		    <?php get_template_part( '_parts/component', 'loop' ); ?>

		    <!-- GET PAGINATION -->
		    <?php //btwp_pagination(); ?>

		    <!-- PAGINATION HTML -->
		    <?php get_template_part( '_parts/component', 'pagination-html' ); ?>			
		</div>
	</div>
</main>

<?php get_footer(); ?>

