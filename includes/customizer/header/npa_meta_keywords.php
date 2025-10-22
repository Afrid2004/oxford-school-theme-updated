<?php
$wp_customize->add_section('npa_meta_keywords', array(
  'title'   => __('Meta Keywords'),
  'panel'   => 'npa_header_panel'
));


// Menubar Background Color
$wp_customize->add_setting('npa_meta_keywords_setting', array(
  'default'   => 'dhaka',
  'transport' => 'refresh',
  // 'sanitize_callback' => 'theme_slug_sanitize_js_code', //encode for DB insert
  // 'sanitize_js_callback' => 'theme_slug_escape_js_output' //ecape script for the textarea
));

$wp_customize->add_control('npa_meta_keywords_setting', array(
  'label'         => esc_html__('Meta Keywords', 'school-theme'),
  'description'   => esc_html__('Meta Keywords Paste Here'),
  'settings'      => 'npa_meta_keywords_setting',
  'section'       => 'npa_meta_keywords',
  'type'          => 'textarea'
));
