<?php

// Registra Post Type -> Portfólio
function btwp_register_post_types_portifolio(){
	register_post_type('portfolio',
		array(
			'labels' => array(
				'name' => 'Portfólio',
				'singular_name' => 'Portfólio',
				'add_new' => 'Adicionar Trabalho',
				'edit_item' => 'Editar Trabalho'
			),
			'public' => true,
			'has_archive' => true,
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			)
		)
	);
}

// Registra Taxonomias -> Portfólio
function btwp_register_taxonomies(){
	register_taxonomy('portfolio-categoria', 'portfolio',
		array(
			'labels' => array(
				'name' => 'Categoria de Portfólio',
				'menu_name' => 'Categorias'
			),
			'public' => true,
			'hierarchical' => true
		)
	);
}

?>
