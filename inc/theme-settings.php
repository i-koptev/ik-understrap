<?php
/**
 * Check and setup theme's default settings
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
if ( ! function_exists( 'ikunderstrap_setup_theme_default_settings' ) ) {
	/**
	 * Store default theme settings in database.
	 */
	function ikunderstrap_setup_theme_default_settings() {
		$defaults = ikunderstrap_get_theme_default_settings();
//		var_dump($defaults);
		$settings = get_theme_mods();
//		var_dump($settings);
		foreach ( $defaults as $setting_id => $default_value ) {
			// Check if setting is set, if not set it to its default value.
			if ( ! isset( $settings[ $setting_id ] ) ) {
				set_theme_mod( $setting_id, $default_value );
			}
		}
	}
}

if ( ! function_exists( 'ikunderstrap_get_theme_default_settings' ) ) {
	/**
	 * Retrieve default theme settings.
	 *
	 * @return array
	 */
	function ikunderstrap_get_theme_default_settings() {
		$defaults = array(
			'ikunderstrap_posts_index_style' => 'default',   // Latest blog posts style.
			'ikunderstrap_sidebar_position'  => 'right',     // Sidebar position.
			'ikunderstrap_container_type'    => 'container', // Container width.
		);

		/**
		 * Filters the default theme settings.
		 *
		 * @param array $defaults Array of default theme settings.
		 */
		return apply_filters( 'ikunderstrap_theme_default_settings', $defaults );

	}
}
