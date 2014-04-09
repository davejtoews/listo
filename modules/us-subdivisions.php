<?php

class Listo_US_Subdivisions extends Listo {

	// http://en.wikipedia.org/wiki/ISO_3166-2:US
	private static $items = array(
		'ak' => "Alaska",
		'al' => "Alabama",
		'ar' => "Arkansas",
		'as' => "American Samoa",
		'az' => "Arizona",
		'ca' => "California",
		'co' => "Colorado",
		'ct' => "Connecticut",
		'dc' => "District of Columbia",
		'de' => "Delaware",
		'fl' => "Florida",
		'ga' => "Georgia",
		'gu' => "Guam",
		'hi' => "Hawaii",
		'ia' => "Iowa",
		'id' => "Idaho",
		'il' => "Illinois",
		'in' => "Indiana",
		'ks' => "Kansas",
		'ky' => "Kentucky",
		'la' => "Louisiana",
		'ma' => "Massachusetts",
		'md' => "Maryland",
		'me' => "Maine",
		'mi' => "Michigan",
		'mn' => "Minnesota",
		'mo' => "Missouri",
		'mp' => "Northern Mariana Islands",
		'ms' => "Mississippi",
		'mt' => "Montana",
		'nc' => "North Carolina",
		'nd' => "North Dakota",
		'ne' => "Nebraska",
		'nh' => "New Hampshire",
		'nj' => "New Jersey",
		'nm' => "New Mexico",
		'nv' => "Nevada",
		'ny' => "New York",
		'oh' => "Ohio",
		'ok' => "Oklahoma",
		'or' => "Oregon",
		'pa' => "Pennsylvania",
		'pr' => "Puerto Rico",
		'ri' => "Rhode Island",
		'sc' => "South Carolina",
		'sd' => "South Dakota",
		'tn' => "Tennessee",
		'tx' => "Texas",
		'um' => "United States Minor Outlying Islands",
		'ut' => "Utah",
		'va' => "Virginia",
		'vi' => "Virgin Islands, U.S.",
		'vt' => "Vermont",
		'wa' => "Washington",
		'wi' => "Wisconsin",
		'wv' => "West Virginia",
		'wy' => "Wyoming" );

	public static function get_items( $args = '' ) {
		return self::$items;
	}

}

?>