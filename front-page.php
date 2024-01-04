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

  $producto1 = "producto-1";
?>


<?php get_template_part( 'templates/parts/sections/hero', null, $hero ); ?>

<section class="section-title">
  <div class="container">
    <?php the_field("title"); ?>
  </div>
</section>

<?php get_template_part( 'templates/parts/sections/products', $producto1 ); ?>
<?php get_template_part( 'templates/parts/sections/products', $producto1 ); ?>
<?php get_template_part( 'templates/parts/sections/products', $producto1 ); ?>



<?php get_footer(); ?>