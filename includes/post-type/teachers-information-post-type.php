<?php

function teachers_information_post_type()
{
    register_post_type('teachers_information', array(
        'labels'                => array(
            'name'              => __('শিক্ষকবৃন্দের তথ্য', 'school-theme'),

            'singular_name'         => 'Teacher Information Item',
            'add_new_item'          => 'Add New Teacher Information Item',
            'edit_item'             => 'Edit Teacher Information Item',
            'new_item'              => 'New Teacher Information Item',
            'view_item'             => 'View Teacher Information Item',
            'search_items'          => 'Search Teacher Information Items',
            'not_found'             => 'No Teacher Information Items found',
            'not_found_in_trash'    => 'No Teacher Information Items found in Trash',
            'all_items'             => 'All Teacher Information Items',


        ),
        'public'                => true,
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'teacher-information'),
        'menu_position'         => 32,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'supports'              => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'teachers_information_post_type');
