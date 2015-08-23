<?php
// ===== COLINHA WP-CONFIG ===== //

// Desativando o sistema de revisões
define('WP_POST_REVISIONS', false );

// Limitando o número de revisões de um post
define('WP_POST_REVISIONS', 3);

// Remove BRs do contact form
define ('WPCF7_AUTOP', false );

// ===== COLINHA LOOP ===== //

// Estrutura padrão do Loop WordPress
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>

<?php endwhile; endif; wp_reset_postdata(); ?>

// Loop customizado com WP_Query
$nomeSlug = new WP_Query(
	array(
		'posts_per_page' => '3',
		'category_name' => 'nomeCategoria'
	)
);

<?php if( $nomeSlug->have_posts() ) : while( $nomeSlug->have_posts() ) : $nomeSlug->the_post(); ?>

// Aqui Template tags

<?php endwhile; endif; wp_reset_postdata(); ?>
