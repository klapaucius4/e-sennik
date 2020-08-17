<?php
if ( ! defined( 'ABSPATH' ) ) exit;

if ( ! function_exists( 'es_setup' ) ) :

    function es_setup() {
    
        /*
        
    
        add_theme_support( 'automatic-feed-links' );
    
        add_theme_support( 'title-tag' );
    
        add_theme_support( 'post-thumbnails' );
        */

        
        load_theme_textdomain( 'es', get_template_directory() . '/languages' );

        register_nav_menus(
            array(
            'menu_main' => esc_html__( 'Menu główne', 'es' ),
            'menu_footer' => esc_html__( 'Menu stopka', 'es' ),
            )
        );
    
    

    
        show_admin_bar(false);
    
    }
endif;
add_action( 'after_setup_theme', 'es_setup' );


function ts_remove_wp_menu_pages() {
    remove_menu_page( 'edit-comments.php' );                //Comments
    //remove_submenu_page('themes.php', 'customize.php');     //Customize
    //remove_menu_page( 'edit.php' );
}
add_action( 'admin_menu', 'ts_remove_wp_menu_pages' );



function my_login_logo_one() {
    ?> 
    <style type="text/css"> 
    body.login div#login h1 a {
        background-image: url(<?= get_template_directory_uri(); ?>/img/logo-pink.svg);
        padding-bottom: 30px;
    } 
    </style>
<?php 
}
add_action( 'login_enqueue_scripts', 'my_login_logo_one' );