<?php

// Insere title no head
add_theme_support( 'title-tag' );

// Habilita imagens destacadas
add_theme_support('post-thumbnails');

// Zera o tamanho do corte das thumbs
update_option( 'thumbnail_size_h', 0 );
update_option( 'thumbnail_size_w', 0 );
update_option( 'medium_size_h', 0 );
update_option( 'medium_size_w', 0 );
update_option( 'large_size_h', 0 );
update_option( 'large_size_w', 0 );
