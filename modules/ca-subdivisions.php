<?php
/**
 * The list of subdivisions of the Canada based on ISO 3166-2:CA standard.
 *
 * Source: http://en.wikipedia.org/wiki/ISO_3166-2:CA ISO 3166-2:CA
 */
class Listo_CA_Subdivisions implements Listo {

	private static $items = array(
		'ab' => 'Alberta',
		'bc' => 'British Columbia',
		'mb' => 'Manitoba',
		'nb' => 'New Brunswick',
		'nl' => 'Newfoundland and Labrador',
		'ns' => 'Nova Scotia',
		'on' => 'Ontario',
		'pe' => 'Prince Edward Island',
		'qc' => 'Quebec	Québec',
		'sk' => 'Saskatchewan',
		'nt' => 'Northwest Territories',
		'nu' => 'Nunavut',
		'yt' => 'Yukon');

	private static $groups = array(
		'provinces' => array('ab', 'bc', 'mb', 'nb', 'nl', 'ns', 'on', 'pe', 'qc', 'sk' ),
		'territories' => array( 'nt', 'nu', 'yt' ) );

	private function __construct() {}

	public static function items() {
		return self::$items;
	}

	public static function groups() {
		return self::$groups;
	}

}
