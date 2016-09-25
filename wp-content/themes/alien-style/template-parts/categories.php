<?php
/**
 * The template part for displaying for categories
 *
 * @package WordPress
 * @subpackage Alien_Code
 * @since Alien Style 1.0
 */
?>

<div class="categories-container row medium-2 columns show-for-medium">
  <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
    <button id="menu-toggle" class="menu-toggle"><?php _e( 'Menu', 'twentysixteen' ); ?></button>

    <div id="site-header-menu" class="site-header-menu">
      <?php if ( has_nav_menu( 'primary' ) ) : ?>
        <nav id="site-navigation" class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'twentysixteen' ); ?>">
          <?php
            wp_nav_menu( array(
              'theme_location' => 'primary',
              'menu_class'     => 'primary-menu',
             ) );
          ?>
        </nav><!-- .main-navigation -->
      <?php endif; ?>
    </div>
  <?php endif; ?>

  <hr>

  <?php
    $argumentos = array(
    );
    wp_list_categories($argumentos);
  ?>
</div>
