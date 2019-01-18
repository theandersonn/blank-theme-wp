<?php get_header(); ?>

<main class="main">
	<div class="container">
		<div class="row">
		    <h2>Categoria: <?php single_cat_title(); ?></h2>

			<?php
				if( have_posts() ) :
					while( have_posts() ) :
						the_post();
                            echo 'your content here';
						endwhile;
				else :
					echo '<p>Nenhum conteúdo encontrado.</p>';
				endif;
			?>

		    <!-- GET PAGINATION -->
		    <?php //btwp_pagination(); ?>

		    <!-- PAGINATION HTML -->
		    <?php get_template_part( 'template-parts/pagination', 'html' ); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
