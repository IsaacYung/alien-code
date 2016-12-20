<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Alien_Code
 * @since Alien Style 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>
	</header>
	<!-- .entry-header -->
	<div class="row columns">
		<div class="columns text-center" style="background-color: <?php the_field( 'background_featured_color' ); ?>">
			<?php alien_post_thumbnail(); ?>
		</div>

		<div class="entry-content columns content-single">
			<?php the_title( sprintf( '<h1 class="entry-title text-center">', esc_url( get_permalink() ) ), '</h1>' ); ?>
			<?php alien_excerpt(); ?>
			<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentysixteen' ),
			get_the_title()
			) );

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
