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
      <?php foreach ($posts as $post) :
        $postId = $post->ID;
        $title = get_the_title($postId);
        $link = get_field('link', $postId);

        $thumbnail_id = get_post_thumbnail_id($postId);
        $image_src = wp_get_attachment_image_url($thumbnail_id, 'medium');
        $image_meta = wp_get_attachment_metadata($thumbnail_id);

        $thumbnail = get_the_post_thumbnail(
          $postId,
          'medium',
          array(
            'alt'       => esc_attr($title),
            'width'     => $image_meta['width'],
            'height'    => $image_meta['height'],
            'class'     => 'attachment-medium size-medium wp-post-image daniel',
            'decoding'  => 'async',
            'fetchpriority' => 'high',
            'srcset'    => wp_get_attachment_image_srcset($thumbnail_id, 'medium'),
            'sizes'     => '(min-width: 1280px) 243px, (min-width: 1040px) calc(18.18vw + 14px), (min-width: 780px) 300px, calc(46.74vw - 55px)',
          )
        );
      ?>
      <li>
          <a href="<?= esc_url($link) ?>" target="_blank">
              <figure>
              <?= $thumbnail ?>
              </figure>
              <p><?= esc_html($title) ?></p>
          </a>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>
</section>