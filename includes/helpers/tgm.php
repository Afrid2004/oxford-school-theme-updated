<?php

add_action('tgmpa_register', 'sa_faroque_tgm');


function sa_faroque_tgm()
{

	$plugins = array(
		//Open Graph and Twitter Card Tags
		array(
			'name'               => 'Open Graph and Twitter Card Tags', // The plugin name.
			'slug'               => 'wonderm00ns-simple-facebook-open-graph-tags', // The plugin slug (typically the folder name).
			'is_callable'  		 => 'wpseo_init'
		),

		//comments-from-facebook
		array(
			'name'               => 'comments from facebook', // The plugin name.
			'slug'               => 'comments-from-facebook', // The plugin slug (typically the folder name).
			'is_callable'  		 => 'wpseo_init'
		),

		//Advanced Custom Fields
		array(
			'name'               => 'Advanced Custom Fields', // The plugin name.
			'slug'               => 'advanced-custom-fields', // The plugin slug (typically the folder name).
			'is_callable'  		 => 'wpseo_init'
		),


		//Autoptimize
		array(
			'name'               => 'Autoptimize', // The plugin name.
			'slug'               => 'autoptimize', // The plugin slug (typically the folder name).
			'is_callable'  		 => 'wpseo_init'
		),

		//AddToAny Share Buttons
		array(
			'name'               => 'AddToAny Share Buttons', // The plugin name.
			'slug'               => 'add-to-any', // The plugin slug (typically the folder name).
			'is_callable'  		 => 'wpseo_init'
		),

		//Force Regenerate Thumbnails
		array(
			'name'               => 'Force Regenerate Thumbnails', // The plugin name.
			'slug'               => 'force-regenerate-thumbnails', // The plugin slug (typically the folder name).
			'is_callable'  		 => 'wpseo_init'
		),

		//Force Regenerate Thumbnails
		array(
			'name'               => 'Bangla Date Display', // The plugin name.
			'slug'               => 'bangla-date-display', // The plugin slug (typically the folder name).
			'is_callable'  		 => 'wpseo_init'
		),

		//WPS Hide Login
		array(
			'name'               => 'WPS Hide Login', // The plugin name.
			'slug'               => 'wps-hide-login', // The plugin slug (typically the folder name).
			'is_callable'  		 => 'wpseo_init'
		),
	);

	$config = array(
		'id'           => 'saFaroqueTgmpa',         // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.

	);

	tgmpa($plugins, $config);
}
