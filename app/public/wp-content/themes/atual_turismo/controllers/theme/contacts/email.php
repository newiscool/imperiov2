<?php
/**
 * Created by PhpStorm.
 * User: Vanssiler
 * Date: 15/02/17
 * Time: 16:12
 */

function email( $wp_customize ){
	$wp_customize->add_section( 'codesigner_email' , array(
		'title' 		=> __( 'E-mails', 'txt_footer' ),
		'priority' 		=> 30,
		'description' 	=> '<strong>E-MAILS PARA CONTATO.</strong> <br>Este tema utiliza <strong>FontAwesome</strong> como base de ícones. Para encontrar seus ícones visite o <a href="http://fontawesome.io/icons/" target="_blank">site oficial</a> e faça uma busca pelo ícone desejado.',
	) );
	$wp_customize->add_setting( 'email_icon', array('default' => '<i class="fa fa-envelope-o" aria-hidden="true"></i>'));
	$wp_customize->add_setting( 'email_1_name' );
	$wp_customize->add_setting( 'email_1' );
	$wp_customize->add_setting( 'email_2_name' );
	$wp_customize->add_setting( 'email_2' );
	$wp_customize->add_setting( 'email_3_name' );
	$wp_customize->add_setting( 'email_3' );
	$wp_customize->add_setting( 'email_4_name' );
	$wp_customize->add_setting( 'email_4' );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_icon', array(
		'section' 	=> 'codesigner_email',
		'settings'	=> 'email_icon',
		'type'      => 'text',
		'label' 	=> 'Ícone de e-mail do site.',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_1_name', array(
		'section' 		=> 'codesigner_email',
		'settings'		=> 'email_1_name',
		'type'      	=> 'text',
		'label' 		=> 'E-mail 1',
		'description'	=> 'Nome para exibição',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_1', array(
		'section' 		=> 'codesigner_email',
		'settings'		=> 'email_1',
		'type'      	=> 'text',
		'description' 	=> 'Endereço de e-mail',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_2_name', array(
		'section' 		=> 'codesigner_email',
		'settings'		=> 'email_2_name',
		'type'      	=> 'text',
		'label' 		=> 'E-mail 2',
		'description'	=> 'Nome para exibição',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_2', array(
		'section' 		=> 'codesigner_email',
		'settings'		=> 'email_2',
		'type'      	=> 'text',
		'description' 	=> 'Endereço de e-mail',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_3_name', array(
		'section' 		=> 'codesigner_email',
		'settings'		=> 'email_3_name',
		'type'      	=> 'text',
		'label' 		=> 'E-mail 3',
		'description'	=> 'Nome para exibição',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_3', array(
		'section' 		=> 'codesigner_email',
		'settings'		=> 'email_3',
		'type'      	=> 'text',
		'description' 	=> 'Endereço de e-mail',
	) ) );

	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_4_name', array(
		'section' 		=> 'codesigner_email',
		'settings'		=> 'email_4_name',
		'type'      	=> 'text',
		'label' 		=> 'E-mail 4',
		'description'	=> 'Nome para exibição',
	) ) );
	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'email_4', array(
		'section' 		=> 'codesigner_email',
		'settings'		=> 'email_4',
		'type'      	=> 'text',
		'description' 	=> 'Endereço de e-mail',
	) ) );

}
add_action('customize_register', 'email');