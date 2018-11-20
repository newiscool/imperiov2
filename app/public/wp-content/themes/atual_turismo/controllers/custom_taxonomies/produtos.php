<?php
/**
 * Created by PhpStorm.
 * User: Vanssiler
 * Date: 14/02/17
 * Time: 21:26
 */

// CATEGORIA ESPECIAL DE PRODUTOS

function categorias_de_produtos() {

	register_taxonomy(
		'produtos-category',
		'produtos',
		array(
			'label' => __( 'Categoria de Produtos' ),
			'rewrite' => array( 'slug' => 'produtos-category' ),
			'hierarchical' => true,
		)
	);
}
add_action( 'init', 'categorias_de_produtos' );


function produtos_register() {

	$labels = array(
		'name' => _x('Produtos', 'post type general name'),
		'singular_name' => _x('Produto', 'post type singular name'),
		'add_new' => _x('Adicionar novo', 'produto item'),
		'add_new_item' => __('Adicionar novo produto'),
		'edit_item' => __('Editar produto'),
		'new_item' => __('Novo produto'),

		'view_item' => __('Ver produto'),
		'search_items' => __('Buscar produto'),
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
		'menu_icon' => 'dashicons-archive',
		'rewrite' => array( 'slug' => 'produtos', 'with_front'=> false ),
		'capability_type' => 'post',
		'hierarchical' => true,
		'has_archive' => true,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail'),
	);

	register_post_type( 'produtos' , $args );

}

add_action( 'init', 'produtos_register' );