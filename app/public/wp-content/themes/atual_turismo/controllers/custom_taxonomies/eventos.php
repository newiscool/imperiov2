<?php
/**
 * Created by PhpStorm.
 * User: Vanssiler
 * Date: 14/02/17
 * Time: 21:28
 */

// CATEGORIA ESPECIAL DE EVENTOS

function categorias_de_eventos() {

	register_taxonomy(
		'eventos-category',
		'eventos',
		array(
			'label' => __( 'Categoria de Eventos' ),
			'rewrite' => array( 'slug' => 'eventos-category' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'categorias_de_eventos' );

function eventos_register() {

	$labels = array(
		'name' => _x('Eventos', 'post type general name'),
		'singular_name' => _x('Evento', 'post type singular name'),
		'add_new' => _x('Adicionar novo', 'evento item'),
		'add_new_item' => __('Adicionar novo Evento'),
		'edit_item' => __('Editar Evento'),
		'new_item' => __('Novo Evento'),

		'view_item' => __('Ver Evento'),
		'search_items' => __('Buscar Evento'),
		'not_found' => __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $labels,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-calendar-alt',
		'rewrite' => array( 'slug' => 'eventos', 'with_front'=> false ),
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	);

	register_post_type( 'eventos' , $args );

}

add_action( 'init', 'eventos_register' );