<?php

/** 
 * ===============================
 * Theme Color Start
 * ==============================
 */
$wp_customize->add_section('npa_theme_bg', array(
    'title'         => __('Scroll ', 'school-theme'),
    'priority'      => 30,
    'description'   => 'If you are intersted to chang theme color, you can do it from here'
));

$wp_customize->add_setting('npa_theme_bg_color', array(
    'default'   => '#afafaf',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_theme_bg_color', array(
    'label'         => __('Theme Color', 'school-theme'),
    'section'       => 'npa_theme_bg',
    'settings'       => 'npa_theme_bg_color',
    'description'   => 'If you are interested to change theme color, you can do it from here',
)));

$wp_customize->add_setting('npa_theme_text_color', array(
    'default'   => '#000000',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_theme_text_color', array(
    'label'         => __('Theme Text Color', 'school-theme'),
    'section'       => 'npa_theme_bg',
    'settings'       => 'npa_theme_text_color',
    'description'   => __(''),
)));

// Menu Active Background Color
$wp_customize->add_setting('npa_active_menu_bg', array(
    'default'       => '#FF0000',
    'transport'     => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_active_menu_bg', array(
    'label'         => __('Active Menu Background Color'),
    'section'       => 'npa_theme_bg',
    'settings'      => 'npa_active_menu_bg',
)));

// Menu Active Text Color
$wp_customize->add_setting('npa_menubar_active_text_setting', array(
    'default'       => '#FFFFFF',
    'transport'     => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_menubar_active_text_setting', array(
    'label'         => __('Active Menu Text Color'),
    'section'       => 'npa_theme_bg',
    'settings'      => 'npa_menubar_active_text_setting',
)));

// Scroll Background Color Option
$wp_customize->add_setting('npa_scroll_bg', array(
    'default'   => '#FF0000',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_scroll_bg', array(
    'label'     => __('Scroll Background Color', 'school-theme'),
    'section'   => 'npa_theme_bg',
    'settings'  => 'npa_scroll_bg'
)));

//Scroll Text Color
$wp_customize->add_setting('npa_scroll_text_color', array(
    'default'   => '#FFFFFF',
    'transport' => 'refresh'
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_scroll_text_color', array(
    'label'     => __('Scroll Text Color', 'school-theme'),
    'section'   => 'npa_theme_bg',
    'settings'  =>  'npa_scroll_text_color'
)));
