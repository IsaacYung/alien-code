<?php
/**
 * The template for the content bottom widget areas on posts and pages
 *
 * @package WordPress
 * @subpackage Alien_Code
 * @since Alien Style 1.0
 */

if ( ! is_active_sidebar( 'sidebar-right' ) ) {
	return;
}

// If we get this far, we have widgets. Let's do this.
?>
<aside id="content-bottom-widgets" class="content-right-widgets medium-4 large-2 columns" role="complementary">
	<?php if ( is_active_sidebar( 'sidebar-right' ) ) : ?>
		<div class="widget-area">
			<?php dynamic_sidebar( 'sidebar-right' ); ?>
		</div><!-- .widget-area -->
	<?php endif; ?>
</aside><!-- .content-bottom-widgets -->
