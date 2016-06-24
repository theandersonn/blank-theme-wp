<?php get_header(); ?>

<main>
	<div class="container">
		<div class="row">
		    <!-- THE DEFAULT LOOP -->
		    <?php get_template_part( 'template-parts/component', 'loop' ); ?>			
		</div>
	</div>
</main>

<?php get_footer(); ?>