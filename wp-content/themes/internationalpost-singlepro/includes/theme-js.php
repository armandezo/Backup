<?php
if (!is_admin()) add_action( 'wp_print_scripts', 'm3_js' );
function m3_js( ) {
	wp_enqueue_script('jquery');    
	wp_enqueue_script( 'flexslider', get_bloginfo('template_directory').'/js/jquery.flexslider-min.js', array( 'jquery' ) );
	wp_enqueue_script( 'tinyscrollbar', get_bloginfo('template_directory').'/js/jquery.tinyscrollbar.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'bjqs', get_bloginfo('template_directory').'/js/bjqs-1.3.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'ddsmoothmenu1', get_bloginfo('template_directory').'/js/ddsmoothmenu1.js', array( 'jquery' ) );
	wp_enqueue_script( 'ddsmoothmenu2', get_bloginfo('template_directory').'/js/ddsmoothmenu2.js', array( 'jquery' ) );
 	wp_enqueue_script( 'js', get_bloginfo('template_directory').'/js/js.js', array( 'jquery' ) );
	}  
?>
