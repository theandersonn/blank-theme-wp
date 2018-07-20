<?php get_header(); ?>

<main class="main">
	<div class="container">
		<div class="row">
        	<?php
	            while ( have_posts() ) :
	            	the_post();
	            		get_template_part( 'template-parts/page/content', 'page' );	
	            endwhile; 
	        ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>