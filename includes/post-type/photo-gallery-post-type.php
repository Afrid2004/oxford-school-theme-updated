<?php

function gallery_post_type()
{
    register_post_type('photo_gallery', array(
        'labels'                => array(
            'name'              => __('ফটো গ্যালারি', 'school-theme'),

        ),
        'public'                => true,
        'menu_icon'             => 'dashicons-format-gallery',
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'gallery'),
        'menu_position'         => 26,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'supports'              => array('title', 'thumbnail'),
    ));
}
add_action('init', 'gallery_post_type');
