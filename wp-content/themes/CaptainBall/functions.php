<?php 

function expodigital_theme_styles() {

	wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css?family=Josefin+Sans|Montserrat:200,300,400' );
	wp_enqueue_style( 'font-awesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' );
	wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
	wp_enqueue_style( 'materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css' );
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );

}
add_action('wp_enqueue_scripts', 'expodigital_theme_styles');

function expodigital_theme_js() {

	wp_enqueue_script( 'bootstrap_js', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array('jquery'),'' ,true );
	wp_enqueue_script( 'materialize_js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js', array('jquery'),'' ,true );
	wp_enqueue_script( 'jquery_scrollTo_js', get_template_directory_uri() . '/js/jquery.scrollTo.min.js' , array('jquery'),'' ,true );
	wp_enqueue_script( 'modernizr_js', get_template_directory_uri() . '/js/modernizr.js' , array('jquery'),'' ,true );
	wp_enqueue_script( 'script_js', get_template_directory_uri() . '/js/script.js' , array('jquery'),'' ,true );

}
add_action('wp_enqueue_scripts', 'expodigital_theme_js');

register_nav_menus(array(
	'primary' => __( 'Primary Menu' ),
));

?>