<?php
/**
 * Plugin Name:     ThinkShout
 * Plugin URI:      thinkshout.com
 * Description:     ThinkShout global config and functions.
 * Author:          ThinkShout
 * Author URI:      thinkshout.com
 * Text Domain:     thinkshout
 * Domain Path:     /languages
 * Version:         0.1.0
 *
 * @package         thinkshout
 */

function thinkshout_acf_json_save( $path ) {
	$path = trailingslashit( WP_CONTENT_DIR ) . 'acf-json';

	return $path;
}

add_filter( 'acf/settings/save_json', 'thinkshout_acf_json_save' );

function thinkshout_acf_json_load( $paths ) {
	$paths[] = trailingslashit( WP_CONTENT_DIR ) . 'acf-json';

	return $paths;
}

add_filter( 'acf/settings/load_json', 'thinkshout_acf_json_load' );
