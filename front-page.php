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


  $content_copy = get_field("content_copy");
  $content_img = get_field("content_img");  
  $content_copy_2 = get_field("content_copy_2");
  $content_img_2 = get_field("content_img_2");  
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
<?php get_template_part( 'templates/parts/sections/products', null, $product = "producto-3" ); ?>
<section class="section-copy">
  <div class="container">
    <?= $copy_prod_3; ?>
  </div>
</section>

<section class="content">
  <div class="container">
    <div class="content__grid">
      <div class="content__text">
        <?= $content_copy ?>
      </div>
      <figure>
        <img src="<?= $content_img ?>" alt="Marcas de Prestigio a tu Alcance" width="501" height="478">
      </figure>
    </div>
  </div>
</section>

<section class="content">
  <div class="container">
    <div class="content__grid reverse">
      <figure>
        <img src="<?= $content_img_2 ?>" alt="Envío a Todo Colombia" width="501" height="478">
      </figure>

      <div class="content__text">
        <?= $content_copy_2 ?>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>