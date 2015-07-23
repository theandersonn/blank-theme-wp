<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!--[if lt IE 9]>
    	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/html5.js"></script>
    	<![endif]-->
        <?php wp_head(); ?>
    </head>
<body>

	<!-- TOPO SITE -->
	<header>

	</header>

    <!-- TOPO MENU -->
    <menu>
        <?php get_template_part('template-parts/menu','topo')?>
    </menu>
