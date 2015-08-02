<?php

/*--------------------------------------------------------------
	HABILITANDO IMAGENS DESTACADAS
--------------------------------------------------------------*/
add_theme_support('post-thumbnails');
add_image_size('large', 700, '', true); // Large Thumbnail
add_image_size('medium', 250, '', true); // Medium Thumbnail
add_image_size('small', 120, '', true); // Small Thumbnail
add_image_size('custom-size', 700, '', true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');

?>
