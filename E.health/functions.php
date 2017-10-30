<?php

/**
 * Enqueue scripts and styles.
 */
function sod_scripts() {

	wp_enqueue_style( 'style', get_stylesheet_uri() );


	wp_enqueue_script( 'sod-masonry', get_template_directory_uri() . '/js/isotope-docs.min.js', array(), '20151215', true );




	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
function learningWordPress_setup(){

	//Navigation Menus
	register_nav_menus(array(
		'primary' => __( 'Primary Menu' )
	));
	//add post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link'));

}

add_action('after_setup_theme', 'learningWordPress_setup');


?>
