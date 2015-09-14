<?php

/*--------------------------------------------------------------
	INSERE FAVICON
--------------------------------------------------------------*/
function adding_favicon() {
echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_stylesheet_directory_uri().'/assets/images/favicon.ico" />';
}
add_action('wp_head', 'adding_favicon');
