<?php
get_header();
?>

<div class="custom-category-product">
  <div class="container">
    <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
      <header class="woocommerce-products-header">
        <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
      </header>
    <?php endif; ?>

    <ul class="custom-category-product__grid">
      <?php
        if ( have_posts() ) {
          while ( have_posts() ) {
            the_post();
            wc_get_template_part( 'content', 'product' );
          }
        } else {
          do_action( 'woocommerce_no_products_found' );
        }
      ?>
    </ul>
    <?php
      /**
       * Hook: woocommerce_after_shop_loop.
       *
       * @hooked woocommerce_pagination - 10
       */
      do_action('woocommerce_after_shop_loop');
    ?>
  </div>
</div>

<?php
get_footer();
