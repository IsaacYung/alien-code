<?php
/**
 * The template part for displaying for categories
 *
 * @package WordPress
 * @subpackage Alien_Code
 * @since Alien Style 1.0
 */
?>

<div class="categories-container row medium-4 large-2 columns">
  <?php if ( has_nav_menu( 'primary' ) || has_nav_menu( 'social' ) ) : ?>
    <div id="site-header-menu" class="site-header-menu columns">
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
  <div class="columns">
    <ul>
      <?php
      $argumentos = array(
        'title_li' => '',
        'hide_title_if_empty' => false,
      );
      wp_list_categories($argumentos);
      ?>
    </ul>
  </div>
</div>
