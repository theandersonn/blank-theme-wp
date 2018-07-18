<?php get_header(); ?>

<main class="main">
	<div class="container">
		<div class="row">
		    <h2>Post(s) com a Tag <?php single_tag_title(); ?></h2>

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
