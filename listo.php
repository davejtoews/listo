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
	public function get_items();
}

function listo( $type, $args = '' ) {
	$list_types = array(
		'countries' => 'Listo_Countries' );

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

	$listo = new $class;

	if ( ! is_callable( array( $listo, 'get_items' ) ) ) {
		return false;
	}

	return $listo->get_items( $args );
}

?>