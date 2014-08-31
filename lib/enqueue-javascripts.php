<?php
function enqueue_javascripts()
{
	wp_register_script( 'headroom.js', get_template_directory_uri() . '/bower_components/headroom.js/dist/headroom.min.js', array( ), '', true );
    wp_register_script( 'jQuery.headroom.js', get_template_directory_uri() . '/bower_components/headroom.js/dist/jQuery.headroom.min.js', array( 'jquery' ), '', true );
    wp_register_script( 'bigtext', get_template_directory_uri() . '/bower_components/bigtext/dist/bigtext.js', array( 'jquery' ), '', true );

    wp_enqueue_script( 'headroom.js' );
    wp_enqueue_script( 'jQuery.headroom.js' );
    wp_enqueue_script( 'bigtext' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_javascripts' );
?>