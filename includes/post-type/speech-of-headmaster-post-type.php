<?php

function speech_of_headmaster_post_type()
{
    register_post_type('speech_of_headmaster', array(
        'labels'                => array(
            'name'              => __('প্রধান শিক্ষকের বাণী', 'school-theme'),
        ),
        'public'                => true,
        'menu_icon'             => 'dashicons-businessperson',
        'has_archive'           => true,
        'rewrite'               => array('slug' => 'speech-of-headmaster'),
        'menu_position'         => 31,
        'publicly_queryable'    => true,
        'query_var'             => true,
        'show_ui'               => true,
        'capability_type'       => 'post',
        'hierarchical'          => true,
        'supports'              => array('title', 'editor', 'thumbnail'),
    ));
}
add_action('init', 'speech_of_headmaster_post_type');
