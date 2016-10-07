<?php
/*--------------------------------------------------------------
	INSERE TITLE NO HEAD
--------------------------------------------------------------*/
add_theme_support( 'title-tag' );

/*--------------------------------------------------------------
	HABILITA IMAGENS DESTACADAS
--------------------------------------------------------------*/
add_theme_support('post-thumbnails');
// example: add_image_size( 'name-thump', width, height, true );
// add_image_size('large', 700, '', true);
// add_image_size('medium', 250, '', true);
// add_image_size('small', 120, '', true);
// add_image_size('custom-size', 700, '', true); 


/*
CONFIGURAR THUMBS NA DASHBOARD DO WORDPRESS
miniatura 	=>	360*173
médio 		=>	768*370
grande 		=> 	1360*655
*/

/*--------------------------------------------------------------
	REGISTRA SIDEBARS
--------------------------------------------------------------*/
// Barra Lateral
register_sidebar(
    array(
    'name' => 'Barra lateral',
    'id' => 'barra-lateral',
    'before_widget' => '<div class="nome-estilo">',
    'after_widget' => '</div>',
    'description' => 'Widgets nesta área serão exibidos na barra lateral'
    )
);