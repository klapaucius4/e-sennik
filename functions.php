<?php

if ( ! function_exists( 'es_setup' ) ) :

    function es_setup() {
    
        /*
        load_theme_textdomain( 'es', get_template_directory() . '/languages' );
    
        add_theme_support( 'automatic-feed-links' );
    
        add_theme_support( 'title-tag' );
    
        add_theme_support( 'post-thumbnails' );
        */
        register_nav_menus(
            array(
            'menu-1' => esc_html__( 'Menu główne', 'es' ),
            )
        );
    
    

    
        show_admin_bar(false);
    
    }
endif;
add_action( 'after_setup_theme', 'es_setup' );