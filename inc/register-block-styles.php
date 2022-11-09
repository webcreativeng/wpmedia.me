<?php
/**
 * Block styles.
 *
 * @package wpmediafront
 * @since 1.0.0
 */

/**
 * Register block styles
 *
 * @since 1.0.0
 *
 * @return void
 */
function wpmediafront_register_block_styles() {

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/template-part',
		array(
			'name'  => 'wpmediafront-sticky',
			'label' => __( 'Sticky header', 'wpmediafront' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'wpmediafront-flat-button',
			'label' => __( 'Flat button', 'wpmediafront' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/button',
		array(
			'name'  => 'wpmediafront-button-shadow',
			'label' => __( 'Button with shadow', 'wpmediafront' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'wpmediafront-navigation-button',
			'label' => __( 'Button style', 'wpmediafront' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/navigation',
		array(
			'name'  => 'wpmediafront-navigation-button-shadow',
			'label' => __( 'Button with shadow', 'wpmediafront' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/list',
		array(
			'name'  => 'wpmediafront-list-underline',
			'label' => __( 'Underlined list items', 'wpmediafront' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/group',
		array(
			'name'  => 'wpmediafront-box-shadow',
			'label' => __( 'Box shadow', 'wpmediafront' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/column',
		array(
			'name'  => 'wpmediafront-box-shadow',
			'label' => __( 'Box shadow', 'wpmediafront' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/columns',
		array(
			'name'  => 'wpmediafront-box-shadow',
			'label' => __( 'Box shadow', 'wpmediafront' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/site-title',
		array(
			'name'  => 'wpmediafront-text-shadow',
			'label' => __( 'Text shadow', 'wpmediafront' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/post-title',
		array(
			'name'  => 'wpmediafront-text-shadow',
			'label' => __( 'Text shadow', 'wpmediafront' ),
		)
	);

	register_block_style( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_style
		'core/heading',
		array(
			'name'  => 'wpmediafront-text-shadow',
			'label' => __( 'Text shadow', 'wpmediafront' ),
		)
	);
}
add_action( 'init', 'wpmediafront_register_block_styles' );

/**
 * This is an example of how to unregister a core block style.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-styles/
 * @see https://github.com/WordPress/gutenberg/pull/37580
 *
 * @since 1.0.0
 *
 * @return void
 */
function wpmediafront_unregister_block_style() {
	wp_enqueue_script(
		'wpmediafront-unregister',
		get_stylesheet_directory_uri() . '/assets/js/unregister.js',
		array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ),
		WPMEDIAFRONT_VERSION,
		true
	);
}
add_action( 'enqueue_block_editor_assets', 'wpmediafront_unregister_block_style' );
