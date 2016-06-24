<?php get_header(); ?>

<main>
	<?php
		$args = new WP_query(
		    array(
		        'post_type'         => 'portfolio', // cpt
		        'term'              => 'portfolio_category', // taxonomia category registrada 
		        'posts_per_page'    => -1,
		        'paged'             => $paged,
		        'tax_query'         => array(
									        array(
									            'taxonomy'  => 'portfolio_tag', // taxonomia tag registrada
									            'field'     => 'slug',
									            'terms'     => 'sites' // tag inserida no admin
		            )
		        )
		    )
		);
	?>

	<?php if( $args->have_posts() ) : while( $args->have_posts() ) : $args->the_post(); ?> 

	<?php the_title(); ?>

	<?php the_content(); ?>

	<?php echo get_post_meta($post->ID, '_portfolio_link', true);?>

	<?php endwhile; endif; wp_reset_postdata(); ?> 	 
</main>

<?php get_footer(); ?>