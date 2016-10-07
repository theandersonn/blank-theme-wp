<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

        <?php wp_head(); ?>
    </head>
    
    <body>
        <!-- ### header ### -->
        <header class="header">
             <nav class="navbar navbar-default navbar-top">
                  <div class="container">
                       <div class="navbar-header">
                            <!-- Hamburguer -->
                            <button class="hamburguer navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-expanded="false">
                                <i class="fa fa-bars"></i>
                            </button>
                            <!-- Brand -->
                            <a class="navbar-brand" href="<?php echo site_url(); ?>" title="<?php bloginfo( 'name' ); ?>">
                                 <?php bloginfo( 'name' ); ?>
                            </a>
                       </div>

                        <!-- header menu html -->
                        <?php get_template_part( 'template-parts/component', 'menu-html' ); ?>                       
                       
                       <!-- Header Navigation -->
                       <?php //if (function_exists('menu_header')) { menu_header(); } ?>                
                   </div>  
             </nav>
        </header> 