<?php
function af_barbershop_address_field() {
    if( function_exists('register_field_group') ):

        register_field_group(array(
            'key' => 'group_5f19e3e72de01',
            'title' => 'Ciekawostka',
            'fields' => array(
                array(
                    'key' => 'field_5f19e401c5e7b',
                    'label' => 'Treść',
                    'name' => 'tresc',
                    'type' => 'textarea',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'default_value' => '',
                    'placeholder' => '',
                    'maxlength' => '',
                    'rows' => '',
                    'new_lines' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'post_type',
                        'operator' => '==',
                        'value' => 'es_curiosity',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
        
        register_field_group(array(
            'key' => 'group_5f1869299cfdb',
            'title' => 'Homepage',
            'fields' => array(
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_type',
                        'operator' => '==',
                        'value' => 'front_page',
                    ),
                ),
            ),
            'menu_order' => 0,
            'position' => 'normal',
            'style' => 'default',
            'label_placement' => 'top',
            'instruction_placement' => 'label',
            'hide_on_screen' => '',
            'active' => true,
            'description' => '',
        ));
    
    endif;
}

add_action( 'acf/register_fields', 'af_barbershop_address_field' );