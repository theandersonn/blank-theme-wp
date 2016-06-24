<?php get_header(); ?>

<main>
	<div class="container">
		<div class="row">
		    <!-- THE DEFAULT LOOP -->
		    <?php get_template_part( 'template-parts/component', 'loop' ); ?>

			<!-- COMMENTS -->
			<?php get_template_part( 'template-parts/component', 'comments' ); ?>			
		</div>
	</div>
</main>	

<?php get_footer(); ?>