<?php

/* Custom Background and Header */

add_theme_support( 'custom-background' );
add_theme_support( 'custom-header' );

function redux_custom_header_setup() {
	$args = array(
		'default-text-color' => 'fff',
		'width'              => 850,
		'height'             => 200,
		'flex-width'         => true,
		'flex-height'        => true,
	);
	add_theme_support( 'custom-header', $args );
}
add_action( 'after_setup_theme', 'redux_custom_header_setup' );

/* The portrait thing in the sidebar */

add_theme_support( 'custom-logo' );

function redux_custom_logo_setup() {
	$defaults = array(
		'height'               => 120,
		'width'                => 120,
		'flex-height'          => false,
		'flex-width'           => false,
		'unlink-homepage-logo' => false, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'redux_custom_logo_setup' );

/* The Sidebar */

function arphabet_widgets_init() {

	register_sidebar( array(
		'name'          => 'The Sidebar',
		'id'            => 'main_sidebar',
		'before_widget' => '<div class="widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3>',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'arphabet_widgets_init' );

/* Customizer */

function redux_customize_register( $wp_customize ) {
	$wp_customize->add_setting( 'main_text_color' , array(
		'default'   => '#000',
	) );
	$wp_customize->add_setting( 'primary_color' , array(
		'default'   => '#3b627e',
	) );
	$wp_customize->add_setting( 'content_background' , array(
		'default'   => '#ffffff',
	) );
	$wp_customize->add_setting( 'content_secondary' , array(
		'default'   => '#eaeaea',
	) );

	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'main_text_color', array(
		'label'      => __( 'Main Text Color', 'redux' ),
		'section'	=>  'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'primary_color', array(
		'label'      => __( 'Primary Color', 'redux' ),
		'section'	=>  'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_background', array(
		'label'      => __( 'Post/Sidebar Color', 'redux' ),
		'section'	=>  'colors',
	) ) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'content_secondary', array(
		'label'      => __( 'Post/Sidebar Secondary Color', 'redux' ),
		'section'	=>  'colors',
	) ) );
 }
 add_action( 'customize_register', 'redux_customize_register' );

/* I guess this adds it to the theme? */

function redux_customize_css()
{
    ?>
         <style type="text/css">
			 a,article footer div a{ color:<?php echo get_theme_mod('main_text_color', '#000'); ?>; }
			 article,#sidebar-body{ color:<?php echo get_theme_mod('main_text_color', '#000'); ?>; }
			 article a, #sidebar-body a, #content nav a{ color:<?php echo get_theme_mod('primary_color', '#3b627e'); ?> }
			 .wp-block-social-links a{ color:#fff !important; }
			 hr{ border-color:<?php echo get_theme_mod('content_secondary', '#000'); ?> !important; }
			 article,#sidebar-body,#content nav a{ background:<?php echo get_theme_mod('content_background', '#fff'); ?> }
			 article footer div{ background:<?php echo get_theme_mod('content_secondary', '#000'); ?>}
         </style>
    <?php
}
add_action( 'wp_head', 'redux_customize_css');

?>