<?php
$wp_customize->add_section('npa_google_analytics_code', array(
  'title'   => __('Google Analytics Code'),
  'panel'   => 'npa_header_panel'
));


// Menubar Background Color
$wp_customize->add_setting('npa_google_analytics_code_setting', array(
  'default'   => '',
  'transport' => 'refresh',
  // 'sanitize_callback' => 'theme_slug_sanitize_js_code', //encode for DB insert
  // 'sanitize_js_callback' => 'theme_slug_escape_js_output' //ecape script for the textarea
));

$wp_customize->add_control('npa_google_analytics_code_setting', array(
  'label'         => esc_html__('Google Analytics Code', 'school-theme'),
  'description'   => esc_html__('Google Analytics Code Paste Here'),
  'settings'      => 'npa_google_analytics_code_setting',
  'section'       => 'npa_google_analytics_code',
  'type'          => 'textarea'
));
