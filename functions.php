<?php

// Load CSS

function copywriter_child_enqueue_styles() {

  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css', array(), '1.0.0');

  wp_enqueue_style( 'child-style', get_stylesheet_uri(), ['parent-style'], time() );
}

add_action( 'wp_enqueue_scripts', 'copywriter_child_enqueue_styles' );

// Changing excerpt more
function new_excerpt_more($more) {
  global $post;
  return '<br><a class="more-link" href="'. get_permalink($post->ID) . '">' . 'Continue Reading' . '</a>';
  }
  add_filter('excerpt_more', 'new_excerpt_more');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// Register Front Page and Footer Widgets

function copywriter_child_widgets_init()
{
  register_sidebar([
    'name'          => esc_html__('Front Page Widget', 'copywriter-theme-child'),
    'id'            => 'front-widget',
    'description'   => esc_html__('Add widgets for front page here', 'copywriter-theme-child'),
    'before_widget' => '<section class="widget front-page-widgets content-inner">',
    'after_widget'  => '</section>',
  ]);

  register_sidebar([
    'name'          => esc_html__('Footer Widget', 'copywriter-theme-child'),
    'id'            => 'footer-widget',
    'description'   => esc_html__('Add widgets for footer section', 'copywriter-theme-child'),
    'before_widget' => '<section class="widget footer-widgets content-inner">',
    'after_widget'  => '</section>',
  ]);
}

add_action( 'widgets_init', 'copywriter_child_widgets_init' );