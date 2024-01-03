<?php
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

?>
