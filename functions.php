<?php

define('URL_BASE', get_stylesheet_directory_uri() . '/');
define('IMG_BASE', URL_BASE . 'assets/images/');

add_theme_support( 'custom-logo' );

register_nav_menus(
  array(
    'main-menu' => _( 'Menu principal' ),
    'main-menu-footer' => _( 'Menu Footer' ),
  )
);

wp_enqueue_style( 'fonts', get_template_directory_uri() . '/assets/fonts/fonts.css', false, '1.1', 'all');
wp_enqueue_style( 'main', get_template_directory_uri() . '/assets/css/main.css', false, '1.1', 'all');

// Remove the admin bar for non-admin users
function remove_admin_bar() {
  if (!current_user_can('manage_options')) {
    show_admin_bar(false);
  }
}
add_action('after_setup_theme', 'remove_admin_bar');

// Enable Custom logo
add_theme_support( 'custom-logo', array(
	'height'      => 100,
	'width'       => 400,
	'flex-height' => true,
	'flex-width'  => true,
	'header-text' => array( 'site-title', 'site-description' ),
));

// Enable SVG
function custom_allow_svg_upload( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'custom_allow_svg_upload' );

// Sidebar
function registrar_sidebar_footer_personalizado() {
	register_sidebar( array(
    'name'          => 'Footer',
    'id'            => 'footer_sidebar',
    'description'   => 'Esta es una barra lateral personalizada.',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widget_titulo">',
    'after_title'   => '</h2>',
	));
}
add_action( 'widgets_init', 'registrar_sidebar_footer_personalizado' );

// Remove All styles and js wordpress
function wps_deregister_styles() {
  wp_dequeue_style( 'global-styles' );
}
add_action( 'wp_enqueue_scripts', 'wps_deregister_styles', 100 );

// remove dashicons
function wpdocs_dequeue_dashicon() {
	if (current_user_can( 'update_core' )) {
	    return;
	}
	wp_deregister_style('dashicons');
}
add_action( 'wp_enqueue_scripts', 'wpdocs_dequeue_dashicon' );

function thewpx_remove_block_library_css() {
  wp_dequeue_style( 'wp-block-library' );
  wp_dequeue_style( 'wp-block-library-theme' );
  wp_dequeue_style( 'wc-block-style' );
  wp_dequeue_style( 'storefront-gutenberg-blocks' );
}
add_action( 'wp_enqueue_scripts', 'thewpx_remove_block_library_css', 100 );

/* ACF */
function my_acf_json_save_point( $path ) {
  return get_stylesheet_directory() . '/acf-json';
}
add_filter( 'acf/settings/save_json', 'my_acf_json_save_point' );

?>
