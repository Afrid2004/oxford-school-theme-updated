<?php

function school_theme_register_navbar()
{
    //register_nav_menus
    register_nav_menus(array(
        'primary-menu' => __('Primary Menu', 'school-theme'),
        'policy-menu'  => __('Policy Menu', 'school-theme'),
    ));
};
add_action('init', 'school_theme_register_navbar');
