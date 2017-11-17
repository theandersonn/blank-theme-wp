<?php get_header(); ?>

<main class="main">
	<div class="container">
		<div class="row">
		    <!-- THE DEFAULT LOOP -->
		    <?php get_template_part( 'template-parts/component', 'loop' ); ?>

			<!-- COMMENTS DISQUS -->
            <?php disqus_embed('your-url-in-disqus'); ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>
