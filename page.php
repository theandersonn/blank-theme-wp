<?php get_header(); ?>

<main class="main">
	<div class="container">
		<div class="row">
		    <!-- THE DEFAULT LOOP -->
		    <?php get_template_part( '_parts/component', 'loop' ); ?>			
		</div>
	</div>
</main>

<?php get_footer(); ?>