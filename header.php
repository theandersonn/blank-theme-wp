<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <!--[if lt IE 9]>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/fallbacks/html5shiv.min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/fallbacks/selectivizr-min.js"></script>
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/fallbacks/respond.min.js"  id="respond-proxy" rel="respond-proxy" ></script>
        <![endif]-->
        <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
<body>

	<!-- TOPO SITE -->
	<header>
        HEADER
    <!-- CHAMADA DO MENU PRINCIPAL -->
    <?php //nav_principal(); ?>

    <!-- CHAMADA DO MENU MOBILE -->
    <?php //nav_mobile(); ?>
	</header>
