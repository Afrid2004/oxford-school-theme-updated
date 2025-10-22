<?php

function slider_post_type()
{
    register_post_type('slider', array(
        'labels'                => array(
            'name'              => __('স্লাইডার', 'school-theme'),
            'singular_name'         => 'slider Item',
            'add_new_item'          => 'Add New slider Item',
            'edit_item'             => 'Edit slider Item',
            'new_item'              => 'New slider Item',
            'view_item'             => 'View slider Item',
            'search_items'          => 'Search slider Items',
            'not_found'             => 'No slider Items found',
            'not_found_in_trash'    => 'No slider Items found in Trash',
            'all_items'             => 'All slider Items',
            'featured_image'        =>  'Use Featured Image',
            'set_featured_image'    =>  'Image Size width: 856px,  height: 460px',


        ),
        'public'                => true,
        'menu_icon'             => 'dashicons-slides',
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'slider'),
        'menu_position'         => 27,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'supports'              => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'slider_post_type');
