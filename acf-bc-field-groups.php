<?php

if (function_exists('acf_add_local_field_group')):

    acf_add_local_field_group(array(
        'key'                   => 'group_5da7252f0e6c9',
        'title'                 => 'Carousel RRRRepeater',
        'fields'                => array(
            array(
                'key'               => 'field_5da7253577cb6',
                'label'             => 'Carousel RRRepeater',
                'name'              => 'carousel_repeater',
                'type'              => 'repeater',
                'instructions'      => 'Add the background image and the text',
                'required'          => 0,
                'conditional_logic' => 0,
                'wrapper'           => array(
                    'width' => '100',
                    'class' => '',
                    'id'    => '',
                ),
                'collapsed'         => '',
                'min'               => 0,
                'max'               => 0,
                'layout'            => 'table',
                'button_label'      => '',
                'sub_fields'        => array(
                    array(
                        'key'               => 'field_5da7277c77cb7',
                        'label'             => 'Image',
                        'name'              => 'carousel_image',
                        'type'              => 'image',
                        'instructions'      => '',
                        'required'          => 0,
                        'conditional_logic' => 0,
                        'wrapper'           => array(
                            'width' => '100',
                            'class' => '',
                            'id'    => '',
                        ),
                        'return_format'     => 'array',
                        'preview_size'      => 'thumbnail',
                        'library'           => 'all',
                        'min_width'         => 1920,
                        'min_height'        => '',
                        'min_size'          => '',
                        'max_width'         => '',
                        'max_height'        => '',
                        'max_size'          => '',
                        'mime_types'        => '',
                    ),
                    array(
                        'key'               => 'field_5da7285577cb8',
                        'label'             => 'Text',
                        'name'              => 'carousel_text',
                        'type'              => 'text',
                        'instructions'      => '',
                        'required'          => 0,
                        'conditional_logic' => 0,
                        'wrapper'           => array(
                            'width' => '',
                            'class' => '',
                            'id'    => '',
                        ),
                        'default_value'     => 'Lorem Ipsum',
                        'placeholder'       => '',
                        'prepend'           => '',
                        'append'            => '',
                        'maxlength'         => '',
                    ),
                ),
            ),
        ),
        'location'              => array(
            array(
                array(
                    'param'    => 'block',
                    'operator' => '==',
                    'value'    => 'acf/bootstrap-carousel',
                ),
            ),
            array(
                array(
                    'param'    => 'page_template',
                    'operator' => '==',
                    'value'    => 'page-templates/fullwidthpage.php',
                ),
            ),
        ),
        'menu_order'            => 0,
        'position'              => 'acf_after_title',
        'style'                 => 'default',
        'label_placement'       => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen'        => '',
        'active'                => true,
        'description'           => '',
    ));

endif;
