<?php
/**
 * Created by PhpStorm.
 * User: Vanssiler
 * Date: 14/02/17
 * Time: 21:28
 */

// CATEGORIA ESPECIAL DE Serviços

function categorias_de_servicos() {

	register_taxonomy(
		'servicos-category',
		'servicos',
		array(
			'label' => __( 'Categoria de Serviços' ),
			'rewrite' => array( 'slug' => 'servicos-category' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'categorias_de_servicos' );

function servicos_register() {

	$labels = array(
		'name' => _x('Serviços', 'post type general name'),
		'singular_name' => _x('Serviço', 'post type singular name'),
		'add_new' => _x('Adicionar novo', 'Serviço item'),
		'add_new_item' => __('Adicionar novo Serviço'),
		'edit_item' => __('Editar Serviço'),
		'new_item' => __('Novo Serviço'),

		'view_item' => __('Ver Serviço'),
		'search_items' => __('Buscar Serviço'),
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
		'rewrite' => array( 'slug' => 'servicos', 'with_front'=> false ),
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	);

	register_post_type( 'servicos' , $args );

}

add_action( 'init', 'servicos_register' );
