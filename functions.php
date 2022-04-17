<?php 


function megakit_css_js() {
    
	
    wp_enqueue_style( 'script-name', get_template_directory_uri() . '/js/example.js', array ( ),' 1.1', 'all');


}


add_action('wp_enqueue_scripts','megakit_css_js');