<?php get_header(); ?>

<main class="main">
	<div class="container">
		<div class="row">
        	<?php
	            while ( have_posts() ) :
	            	the_post();
                    echo 'your content here';
	            endwhile;
	        ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
