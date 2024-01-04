<?php
/**
 * The Hero.
 * @package WordPress
 * @subpackage LMD
 * @since LMD Shop 1.0
 */

 global $product;

$queryArgs = [
  'post_type' => 'featured-product',
  'post_status' => 'publish',
  'posts_per_page' => 4,
  'category_name' => $product
];

// SQL query will be executed during this line
$query = new WP_Query($queryArgs);

// @var WP_Posts[]
$posts = $query->get_posts();

?>

<section class="section-featured-products">
  <div class="container">
    <ul class="section-featured-products__grid">
      <?php foreach ($posts as $post) {
        $postId = $post->ID;
        $title = get_the_title($postId);
        $link = get_field('link', $postId);
        $thumbnail = get_the_post_thumbnail($postId, 'medium', ['alt' => esc_attr($title)]);

      ?>
        <li>
          <a href="<?= $link ?>" target="_blank">
            <figure>
              <?= $thumbnail ?>
            </figure>
            <p><?= $title ?></p>
          </a>
        </li>
      <?php } ?>
    </ul>
  </div>
</section>