<?php
class MainNavWalker extends Walker_Nav_Menu {
  function display_element($item, &$children_elements, $max_depth, $depth, $args, &$output) {
    $current_page_id = get_queried_object_id();
    $is_current_page = ($item->object_id == $current_page_id);

    if ($max_depth == 0) { ?>
      <div class="menu__item <?php echo $is_current_page ? 'current-menu-item' : ''; ?>">
        <a class="menu__item-link text-bold <?php if (isset($children_elements[$item->ID])) { ?> has-menu <?php } ?>" href="<?php echo $item->url; ?>" target="<?php echo $item->target; ?>">
          <?php echo $item->title ?>
          <?php if (isset($children_elements[$item->ID])) { ?>
            <span class="icon">
              <img src="<?= IMG_BASE  ?>icon-chevron-down.svg" alt="icon chevron down" width="30" height="29">
            </span>
          <?php } ?>
        </a>
        <?php if (isset($children_elements[$item->ID])) { ?>
          <div class="submenu" role="tabpanel" aria-labelledby="<?php echo $item->title; ?>">
            <?php foreach ($children_elements[$item->ID] as $key => $child) { ?>
              <div class="submenu__item-link">
                <a href="<?php echo $child->url; ?>" class="level-1 <?php if (isset($children_elements[$child->ID])) { ?> has-submenu <?php } ?>"><?php echo $child->title; ?></a>
              </div>
            <?php } ?>
          </div>
        <?php } ?>
      </div>
    <?php }
  }
}
?>

<header class="header">
  <div class="container">
    <div class="header__grid">
      <div class="header__logo">
        <?php 
          $custom_logo_id = get_theme_mod( 'custom_logo' );
          $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
          echo '<img src="' . esc_url( $custom_logo_url ) . '" alt="">';
        ?>
      </div>
      <div class="header__menu">
        <?php
          wp_nav_menu([
            'theme_location' => 'main-menu',
            'container_class' => '',
            'menu_class' => '',
            'walker' => new MainNavWalker()
          ]);
        ?>
      </div>
      <div class="header__search">
        <?= do_shortcode('[ivory-search id="16" title="AJAX Search Form for WooCommerce"]'); ?>
      </div>
      <div class="header__cart">
        <a href="">
          <img src="<?= IMG_BASE  ?>icon-shopping-bag.svg" alt="icon cart" width="35" height="35">
        </a>
      </div>
    </div>
  </div>
</header>


