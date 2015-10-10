<?php
/*--------------------------------------------------------------
	CRIAÇÃO DA ACTION INIT E REGISTRO DE TAXONOMIAS
--------------------------------------------------------------*/
add_action('init', 'btwp_init_post_type_taxonomies');
function btwp_init_post_type_taxonomies() {
	//Registra as taxonomias
	btwp_register_taxonomies_slider();
	//Registra Post Types (SLIDER)
	btwp_register_post_types_slider();
}

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
			'menu_icon' => 'dashicons-images-alt2', // https://developer.wordpress.org/resource/dashicons/
			'supports' => array(
				'title',
				'editor',
				'thumbnail'
			)
		)
	);
}

// Registra Taxonomias -> SLIDER
function btwp_register_taxonomies_slider(){
	register_taxonomy('slider-categoria', 'slider',
		array(
			'labels' => array(
				'name' => 'Categoria de Slider',
				'menu_name' => 'Categorias'
			),
			'public' => true,
			'hierarchical' => true,
			'show_in_quick_edit' => true,
			'show_admin_column' => true
		)
	);
}
