<?php 
	function fairy_menu(){
		register_nav_menus(array(
			'main_menu' => 'Home Menu'
			));
	}
	add_action('init','fairy_menu');
	
	function fairy_default_menu() {
		echo '<ul id="nav">';
		if ('page' != get_option('show_on_front')) {
			echo '<li><a href="'. site_url() . '/">Home</a></li>';
		}
		wp_list_pages('title_li=');
		echo '</ul>';
	}

 ?>