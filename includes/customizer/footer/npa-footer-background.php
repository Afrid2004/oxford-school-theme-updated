<?php

$wp_customize->add_section('npa_footer_background', array(
  'title'             => esc_html__('Footer Background and Text Color', 'school-theme'),
  'panel'             => 'npa_footer_panel',
));

// npa_footer_background_setting
$wp_customize->add_setting('npa_footer_background_setting', array(
  'default'           => '#1296b1',
  'sanitize_callback' => 'sanitize_hex_color',
  'transport'         => 'refresh',
));
$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'npa_footer_background_setting', array(
  'label'             => esc_html__('Choose Background color', 'school-theme'),
  'section'           => 'npa_footer_background',
  'settings'          => 'npa_footer_background_setting',
)));
