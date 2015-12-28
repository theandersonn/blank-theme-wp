<?php

/*--------------------------------------------------------------
	ALTERA LOGO DO PAINEL DE LOGIN
--------------------------------------------------------------*/
add_action('login_head',  'btwp_change_admin_logo');

function btwp_change_admin_logo(){
    echo '<style  type="text/css">
			h1 a{
				background-image:url('.get_bloginfo('template_directory').'/assets/images/logo-blank-theme-wp.jpg)  !important;
				width: 100% !important;
				height: 100px !important;
				background-size: 100% !important;
			}
		  .button-primary{
			  background: #000 !important;
			  border-color: #000 !important;
			  box-shadow: none !important;
			  text-shadow: none !important;
		  }
		  </style>';
}

/*--------------------------------------------------------------
	ALTERA URL DO PAINEL DE LOGIN
--------------------------------------------------------------*/
add_filter('login_headerurl', 'btwp_change_admin_url');

function btwp_change_admin_url(){
	return get_bloginfo('url');
}

/*--------------------------------------------------------------
	ALTERA TÍTULO DO PAINEL DE LOGIN
--------------------------------------------------------------*/
add_filter('login_headertitle', 'btwp_change_admin_title');

function btwp_change_admin_title(){
	return get_option('blogname');
}
