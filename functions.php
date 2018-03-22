<?php
// WAD custom
 function wad_scripts() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'cplus-child', get_stylesheet_directory_uri() . '/assets/styles/wad.css', array(''), '1.0.0' );
  wp_enqueue_script('custom-script',get_stylesheet_directory_uri() . '/assets/scripts/wad.js', array( 'jquery' ));
}
add_action( 'wp_enqueue_scripts', 'wad_scripts' );

