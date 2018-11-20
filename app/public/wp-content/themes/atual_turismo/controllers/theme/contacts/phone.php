<?php
/**
 * Created by PhpStorm.
 * User: Vanssiler
 * Date: 15/02/17
 * Time: 13:46
 */

function phone_number( $wp_customize ){
	$wp_customize->add_section( 'codesigner_telefone' , array(
		'title' 		=> __( 'Telefones', 'txt_footer' ),
		'priority' 		=> 20,
		'description' 	=> '<strong>TELEFONES PARA CONTATO.</strong> <br>Este tema utiliza <strong>FontAwesome</strong> como base de ícones. Para encontrar seus ícones visite o <a href="http://fontawesome.io/icons/" target="_blank">site oficial</a> e faça uma busca pelo ícone desejado.',
	) );

	$wp_customize->add_setting( 'tel_1' );
	$wp_customize->add_setting( 'tel_1_title', array('default' => 'Telefone'));
	$wp_customize->add_setting( 'tel_1_icon', array('default' => '<i class="fa fa-mobile" aria-hidden="true"></i>'));
	$wp_customize->add_setting( 'tel_2' );
	$wp_customize->add_setting( 'tel_2_title');
	$wp_customize->add_setting( 'tel_2_icon');
	$wp_customize->add_setting( 'tel_3' );
	$wp_customize->add_setting( 'tel_3_title');
	$wp_customize->add_setting( 'tel_3_icon');
	$wp_customize->add_setting( 'tel_4');
	$wp_customize->add_setting( 'tel_4_title');
	$wp_customize->add_setting( 'tel_4_icon');

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_1', array(
		'label' 	=> __('TELEFONE 1'),
		'description' 	=> 'Número',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_1',
		'type'      => 'text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_1_title', array(
		'description' 	=> 'Título',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_1_title',
		'type'      => 'text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_1_icon', array(
		'description' 	=> 'Ícone',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_1_icon',
		'type'      => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_2', array(
		'label' 	=> __('TELEFONE 2'),
		'description' 	=> 'Número',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_2',
		'type'      => 'text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_2_title', array(
		'description' 	=> 'Título',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_2_title',
		'type'      => 'text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_2_icon', array(
		'description' 	=> 'Ícone',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_2_icon',
		'type'      => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_3', array(
		'label' 	=> __('TELEFONE 3'),
		'description' 	=> 'Número',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_3',
		'type'      => 'text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_3_title', array(
		'description' 	=> 'Título',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_3_title',
		'type'      => 'text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_3_icon', array(
		'description' 	=> 'Ícone',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_3_icon',
		'type'      => 'text',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_4', array(
		'label' 	=> __('TELEFONE 4'),
		'description' 	=> 'Número',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_4',
		'type'      => 'text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_4_title', array(
		'description' 	=> 'Título',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_4_title',
		'type'      => 'text',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'tel_4_icon', array(
		'description' 	=> 'Ícone',
		'section' 	=> 'codesigner_telefone',
		'settings'	=> 'tel_4_icon',
		'type'      => 'text',
	) ) );
}
add_action('customize_register', 'phone_number');