<?php
$wp_customize->add_section('npa-menubar-bg-text-color', array(
  'title'   => __('Menubar Background and text color'),
  'panel'   => 'npa_header_panel'
));


// Menubar Background Color
$wp_customize->add_setting('npa-menubar-bg-text-color-setting', array(
  'default'   => '#2cb2bc',
  'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa-menubar-bg-text-color-setting', array(
  'label'     => 'Menubar Background Color',
  'settings'  => 'npa-menubar-bg-text-color-setting',
  'section'   => 'npa-menubar-bg-text-color',
)));


// Menubar Text Color
$wp_customize->add_setting('npa-menubar-text-color-setting', array(
  'default'   => '#ffffff',
  'transport' => 'refresh',
));


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa-menubar-text-color-setting', array(
  'label'     => 'Menubar Text Color',
  'settings'  => 'npa-menubar-text-color-setting',
  'section'   => 'npa-menubar-bg-text-color',
)));


// Menubar Active Background Color
$wp_customize->add_setting('npa-menubar-active-background-setting', array(
  'default'   => '#FF0000',
  'transport' => 'refresh',
));


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa-menubar-active-background-setting', array(
  'label'     => 'Active menu\'s Background Color',
  'settings'  => 'npa-menubar-active-background-setting',
  'section'   => 'npa-menubar-bg-text-color',
)));

// Menubar Active Text Color
$wp_customize->add_setting('npa-menubar-active-text-setting', array(
  'default'   => '#ffffff',
  'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa-menubar-active-text-setting', array(
  'label'     => 'Active Menu\'s Text Color',
  'settings'  => 'npa-menubar-active-text-setting',
  'section'   => 'npa-menubar-bg-text-color',
)));


// Menu Left border
$wp_customize->add_setting('npa-menu-left-border', array(
  'default'     => '#018aa5',
  'capability'  => 'edit_theme_options',
  'transport'   => 'refresh',
));


$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa-menu-left-border', array(
  'label'     => 'Menu\'s left border',
  'settings'  => 'npa-menu-left-border',
  'section'   => 'npa-menubar-bg-text-color',
)));


// Menu Right border
$wp_customize->add_setting('npa-menu-right-border', array(
  'default'   => '#2fb9ce',
  'transport' => 'refresh',
));

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa-menu-right-border', array(
  'label'     => 'Menu\'s Right border',
  'settings'  => 'npa-menu-right-border',
  'section'   => 'npa-menubar-bg-text-color',
)));
