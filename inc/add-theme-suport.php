<?php
/*--------------------------------------------------------------
	INSERINDO TITLE NO HEAD
--------------------------------------------------------------*/
add_theme_support( 'title-tag' );

/*--------------------------------------------------------------
	HABILITANDO IMAGENS DESTACADAS
--------------------------------------------------------------*/
add_theme_support('post-thumbnails');
add_image_size('large', 700, '', true);
add_image_size('medium', 250, '', true);
add_image_size('small', 120, '', true);
add_image_size('custom-size', 700, '', true); 

/*--------------------------------------------------------------
	HABILITA SUPORTE PARA POSTS DINÂMICOS
--------------------------------------------------------------*/
add_theme_support( 'post-formats', array( 
	'aside', 
	'image', 
	'video', 
	'quote', 
	'link', 
	'gallery', 
	'status', 
	'audio', 
	'chat' ) 
);

// add_post_type_support( 'nome-taxonomia', 'post-formats' );

