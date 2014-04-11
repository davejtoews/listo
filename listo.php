<?php
/*
Plugin Name: Listo
Plugin URI: http://contactform7.com/listo
Description: Listo is a simple plugin which supplies several kinds of list including list of countries, states of countries, and major currencies.
Author: Takayuki Miyoshi
Author URI: http://ideasilo.wordpress.com/
Text Domain: listo
Domain Path: /languages/
Version: 1.0
*/

define( 'LISTO_VERSION', '1.0' );
define( 'LISTO_MODULES_DIR', path_join( dirname( __FILE__ ), 'modules' ) );

interface Listo {
	public static function items();
	public static function groups();
}

function listo( $type, $args = '' ) {
	$list_types = array(
		'countries' => 'Listo_Countries',
		'us_subdivisions' => 'Listo_US_Subdivisions',
		'currencies' => 'Listo_Currencies' );

	$list_types = apply_filters( 'listo_list_types', $list_types );

	if ( ! isset( $list_types[$type] ) ) {
		return false;
	}

	$class = $list_types[$type];

	if ( ! class_exists( $class ) ) {
		$mod = sanitize_file_name( str_replace( '_', '-', $type ) . '.php' );
		$mod = path_join( LISTO_MODULES_DIR, $mod );

		if ( file_exists( $mod ) ) {
			require_once $mod;
		}
	}

	if ( ! is_callable( array( $class, 'items' ) ) ) {
		return false;
	}

	$items = $class::items();

	$args = wp_parse_args( $args, array(
		'group' => null ) );

	$group = $args['group'];

	if ( ! $group ) {
		return $items;
	} elseif ( ! is_callable( array( $class, 'groups' ) ) ) {
		return false;
	}

	$groups = $class::groups();

	if ( isset( $groups[$group] ) ) {
		return array_intersect_key( $items, array_fill_keys( $groups[$group], '' ) );
	}

	return $items;
}

?>