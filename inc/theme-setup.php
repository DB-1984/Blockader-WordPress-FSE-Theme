<?php

function blockader_setup() {
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/theme.css' );
}

add_action( 'after_setup_theme', 'blockader_setup' );


function blockader_enqueue_assets() {
	$stylesheet_path = get_theme_file_path( 'assets/css/theme.css' );
	$script_asset    = include get_theme_file_path( 'build/index.asset.php' );

	// AOS styles generated from the import in src/index.js.
	wp_enqueue_style(
		'blockader-aos',
		get_theme_file_uri( 'build/index.css' ),
		[],
		$script_asset['version']
	);

	// Main theme styles.
	wp_enqueue_style(
		'blockader-theme',
		get_theme_file_uri( 'assets/css/theme.css' ),
		[ 'blockader-aos' ],
		filemtime( $stylesheet_path )
	);

	// Theme-wide JavaScript, including AOS initialisation.
	wp_enqueue_script(
		'blockader-theme-scripts',
		get_theme_file_uri( 'build/index.js' ),
		$script_asset['dependencies'],
		$script_asset['version'],
		true
	);
}

add_action( 'wp_enqueue_scripts', 'blockader_enqueue_assets' );


function blockader_register_blocks() {
	register_block_type(
		get_theme_file_path( 'build/associated-posts' )
	);

	register_block_type(
		get_theme_file_path( 'build/blockader-banner' )
	);

	register_block_type(
		get_theme_file_path( 'build/live-rest-search' )
	);
}

add_action( 'init', 'blockader_register_blocks' );