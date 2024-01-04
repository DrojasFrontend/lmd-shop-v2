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

  $title_prod_1 = get_field("title_prod_1");
  $copy_prod_1 = get_field("copy_prod_1");
  $title_prod_2 = get_field("title_prod_2");
  $copy_prod_2 = get_field("copy_prod_2");
  $title_prod_3 = get_field("title_prod_3");
  $copy_prod_3 = get_field("copy_prod_3");

  
?>

<?php get_template_part( 'templates/parts/sections/hero', null, $hero ); ?>

<section class="section-title">
  <div class="container">
    <?php the_field("title"); ?>
  </div>
</section>


<section class="section-subtitle">
  <div class="container">
    <h2><?= $title_prod_1; ?></h2>
  </div>
</section>
<?php get_template_part( 'templates/parts/sections/products', null, $product = "producto-1" ); ?>
<section class="section-copy">
  <div class="container">
    <?= $copy_prod_1; ?>
  </div>
</section>

<section class="section-subtitle">
  <div class="container">
    <h2><?= $title_prod_2; ?></h2>
  </div>
</section>
<?php get_template_part( 'templates/parts/sections/products', null, $product = "producto-2" ); ?>
<section class="section-copy">
  <div class="container">
    <?= $copy_prod_2; ?>
  </div>
</section>

<section class="section-subtitle">
  <div class="container">
    <h2><?= $title_prod_3; ?></h2>
  </div>
</section>
<?php get_template_part( 'templates/parts/sections/products', null, $product = "producto-2" ); ?>
<section class="section-copy">
  <div class="container">
    <?= $copy_prod_3; ?>
  </div>
</section>

<?php get_footer(); ?>