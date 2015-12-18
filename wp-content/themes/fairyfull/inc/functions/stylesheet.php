<?php 
function stylesheet() {
		wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/font-awesome.min.css', array(), '4.4.0', 'all' );
		wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css', array(), '3.3.5', 'all' );
		wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css', array(), '5.2.0', 'all' );
		wp_enqueue_style('style', get_template_directory_uri().'/style.css', array('font-awesome','bootstrap','normalize'), '1.0', 'all' );
	}
add_action( 'wp_enqueue_scripts', 'stylesheet' );

 ?>