<?php 
/**
 * Front Page.
 * @package WordPress
 * @subpackage LMD
 * @since LMD Shop 1.0
 */
get_header(); 

$fields = get_fields();
  // Hero
  $hero = (object) [
    'image_desktop' => $fields['image_desktop'],
    'image_mobile' => $fields['image_mobile'],
  ];
?>


<?php get_template_part( 'templates/parts/sections/hero', null, $hero ); ?>

<?php get_footer(); ?>