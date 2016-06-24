<?php get_header(); ?>

<main>
	<div class="container">
		<div class="row">
		    <h2>Resultado da busca pelo termo '<?php echo esc_html ( get_query_var('s') ); ?>'</h2>

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
