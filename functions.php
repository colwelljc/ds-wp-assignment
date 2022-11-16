<?php

function dswpa_enqueue_style() {
  $style_ver = filemtime( get_stylesheet_directory() . '/style.css' );
  wp_enqueue_style( 'blankslate-style', get_stylesheet_directory_uri() . '/style.css', '', $style_ver );
}
add_action( 'wp_enqueue_scripts', 'dswpa_enqueue_style' );


/**
 * Insert gentle advice.
 */
function dswpa_wellness( $content ) {
  $content .= '<aside><p>Please try to enjoy each post equally. (80 points remaining.)</p></aside>';

  return $content;
}

add_filter( 'the_content', 'dswpa_wellness' );
