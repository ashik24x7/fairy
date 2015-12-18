<?php 
function js() {
		wp_enqueue_script('jquery');
		wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), '3.3.5', true );
		wp_enqueue_script('plugins', get_template_directory_uri().'/js/plugins.js', array('jquery'), '1.0', true );
		wp_enqueue_script('main', get_template_directory_uri().'/js/main.js', array('jquery'), '1,o', true );
	}
add_action( 'wp_enqueue_scripts', 'js' );
 ?>