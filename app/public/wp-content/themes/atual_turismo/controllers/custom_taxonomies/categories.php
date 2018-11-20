<?php
/**
 * Created by PhpStorm.
 * User: Vanssiler
 * Date: 14/02/17
 * Time: 21:12
 */

function get_the_category_custompost( $id = false, $tcat = 'category' ) {
	$categories = get_the_terms( $id, $tcat );
	if ( ! $categories )
		$categories = array();

	$categories = array_values( $categories );

	foreach ( array_keys( $categories ) as $key ) {
		_make_cat_compat( $categories[$key] );
	}

	return apply_filters( 'get_the_categories', $categories );
}

