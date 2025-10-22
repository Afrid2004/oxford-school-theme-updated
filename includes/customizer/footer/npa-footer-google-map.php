<?php

$wp_customize->add_section('npa_footer_map_url', array(
  'title'             => esc_html__('Footer Google Map', 'school-theme'),
  'panel'             => 'npa_footer_panel',
));

// Google Map URL setting
$wp_customize->add_setting('npa_footer_map_url', array(
  'default'           => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.074605392548!2d90.40690178576378!3d23.744718834022915!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c79e9e166e75%3A0xe8bfc6d579d79114!2swebnewsdesign.com!5e0!3m2!1sen!2sbd!4v1759137110236!5m2!1sen!2sbd',
  'sanitize_callback' => 'esc_url_raw',  // URL নিরাপদ করতে
  'transport'         => 'refresh',
));

// Google Map URL control
$wp_customize->add_control('npa_footer_map_url', array(
  'label'    => esc_html__('Google Map Iframe URL [src এর ডাবল কোটেশনের অংশটুকু শুধু পেস্ট করুন]', 'school-theme'),
  'section'  => 'npa_footer_map_url',
  'type'     => 'url',
));
