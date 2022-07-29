<?php
/**
 * Enqueue the styles for the block editor.
 *
 * @package petrichor
 */

if ( ! function_exists( 'petrichor_styles' ) ) :
	function petrichor_styles() {
		wp_register_style( 'petrichor-styles-site', get_template_directory_uri() . '/assets/css/site.css' );
		wp_register_style( 'petrichor-styles-blocks', get_template_directory_uri() . '/assets/css/blocks.css' );

		$dependencies = apply_filters( 'petrichor_style_dependencies', array( 'petrichor-styles-site', 'petrichor-styles-blocks' ) );

		wp_enqueue_style( 'petrichor-styles-front-end', get_template_directory_uri() . '/assets/css/site.css', $dependencies, wp_get_theme( 'Petrichor' )->get( 'Version' ) );

	}
	add_action( 'wp_enqueue_scripts', 'petrichor_styles' );
endif;

if ( ! function_exists( 'petrichor_editor_styles' ) ) :
	function petrichor_editor_styles() {

		add_editor_style( array(
			'./assets/css/editor.css',
			'./assets/css/blocks.css',
			'./assets/css/site.css',
		) );

	}
	add_action( 'admin_init', 'petrichor_editor_styles' );
endif;
