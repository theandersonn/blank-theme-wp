<?php

// Registra Post Type -> SLIDER
function btwp_register_post_types_slider(){
	register_post_type('slider',
		array(
			'labels' => array(
				'name' => 'Slider',
				'singular_name' => 'Slider',
				'add_new' => 'Adicionar Slider',
				'edit_item' => 'Editar Slider'
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

// Registra Taxonomias -> SLIDER
function btwp_register_taxonomies(){
	register_taxonomy('slider-categoria', 'slider',
		array(
			'labels' => array(
				'name' => 'Categoria de Slider',
				'menu_name' => 'Categorias'
			),
			'public' => true,
			'hierarchical' => true
		)
	);
}
