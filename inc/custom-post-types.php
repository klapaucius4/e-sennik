<?php
if ( ! defined( 'ABSPATH' ) ) exit;

add_action( 'init', 'create_new_taxonomy' );

function create_new_taxonomy(){
    register_post_type('es_curiosity', array(
        'labels' => array(
            'name'          => __('Ciekawostki', 'es'),
            'singular_name' => __('Ciekawostka', 'es'),
        ),
        'public' => true,
        'slug' => '/',
        'with_front' => false,
        'has_archive' => true,
        // 'rewrite' => false,
        'supports' => array( 'title' ),
        'menu_icon' => 'dashicons-editor-ol',
        )
    );
}