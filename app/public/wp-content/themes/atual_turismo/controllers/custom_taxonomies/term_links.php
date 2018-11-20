<?php
/**
 * Created by PhpStorm.
 * User: Vanssiler
 * Date: 14/02/17
 * Time: 21:00
 */

function taxonomies_terms_links() {
	$post = get_post( $post->ID );
	$post_type = $post->post_type;
	$taxonomies = get_object_taxonomies( $post_type, 'objects' );
	$out = array();
	foreach ( $taxonomies as $taxonomy_slug => $taxonomy ){
		$terms = get_the_terms( $post->ID, $taxonomy_slug );
		if ( ! empty( $terms ) ) {
			foreach ( $terms as $term ) {
				$out[] = sprintf( '<a href="%1$s">%2$s</a>',
					esc_url( get_term_link( $term->slug, $taxonomy_slug ) ),
					esc_html( $term->name )
				);
			}
		}
	}
	return implode( '', $out );
}