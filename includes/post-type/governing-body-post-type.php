<?php

function governing_body_post_type()
{
    register_post_type('governing_body', array(
        'labels'                => array(
            'name'              => __('শিক্ষকবৃন্দের তথ্য', 'school-theme'),

            'singular_name'         => 'Governing Body Item',
            'add_new_item'          => 'Add New Governing Body Item',
            'edit_item'             => 'Edit Governing Body Item',
            'new_item'              => 'New Governing Body Item',
            'view_item'             => 'View Governing Body Item',
            'search_items'          => 'Search Governing Body Items',
            'not_found'             => 'No Governing Body Items found',
            'not_found_in_trash'    => 'No Governing Body Items found in Trash',
            'all_items'             => 'All Governing Body Items',
        ),
        'public'                => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'governing-body'),
        'menu_position'         => 35,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'supports'              => array('title', 'thumbnail'),
    ));
}
add_action('init', 'governing_body_post_type');
