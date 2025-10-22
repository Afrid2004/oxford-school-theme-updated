<?php

//adding class on nav li
function add_class_primary_menu_li($classes, $item, $args, $depth)
{
    if ($args->theme_location === 'primary-menu') {
        $classes[] = 'nav-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_class_primary_menu_li', 10, 4);

//adding class on nav li a
function add_class_primary_menu_li_a($atts, $item, $args, $depth)
{
    if ($args->theme_location === 'primary-menu') {
        $existing_class = isset($atts['class']) ?  $atts['class'] : '';
        $atts['class'] = $existing_class . 'dropdown nav-link px-2 custom-border';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_primary_menu_li_a', 10, 4);


//adding class on nav li a
function add_class_policy_menu_li_a($atts, $item, $args, $depth)
{
    if ($args->theme_location === 'policy-menu') {
        $existing_class = isset($atts['class']) ?  $atts['class'] : '';
        $atts['class'] = $existing_class . 'text-dark';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'add_class_policy_menu_li_a', 10, 4);
