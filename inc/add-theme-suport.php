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

