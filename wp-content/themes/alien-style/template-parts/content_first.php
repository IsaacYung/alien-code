<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Alien_Code
 * @since Alien Style 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'first-post' ); ?> style="background-image: url(<?php the_field( 'first_featured_image' ); ?>); background-color: <?php the_field( 'background_featured_color' ); ?>">
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>
	</header>
	<!-- .entry-header -->
	<div class="">
		<div class="thumbnail-container medium-3 columns">
			<?php alien_post_thumbnail(); ?>
		</div>
		<div class="entry-content medium-8 columns end">
			<h1 class="entry-title"><a href="<?php echo esc_url( get_permalink() ) ?>" style="color: <?php the_field( 'font_color' ); ?>;" rel="bookmark"><?php the_title(); ?></a></h1>
			<?php alien_excerpt(); ?>
			<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentysixteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
			?>
			<div class="row columns sharing">
			</div>
		</div><!-- .entry-content -->
	</div>
	<div class="excerpt-content columns">
		<div class="row medium-10 columns">
			<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
			get_the_title()
			) );
			?>
		</div>
	</div>
	<footer class="entry-footer float-right">
		<?php
			edit_post_link(
				sprintf(
				/* translators: %s: Name of current post */
				__( 'Edit<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
				get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
