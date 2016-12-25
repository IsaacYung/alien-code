<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Alien_Code
 * @since Alien Style 1.0
 */

get_header(); ?>

<div id="primary" class="content-area row full-width">
	<main id="main" class="site-main medium-8 large-10 columns" role="main">
		<?php
			// Start the loop.
			the_post();

			// Include the single post content template.
			get_template_part( 'template-parts/content_single', 'single' );

			// If comments are open or we have at least one comment, load up the comment template.

		?>

	</main><!-- .site-main -->
	<?php get_sidebar( 'content-right' ); ?>

	<div class="comments medium-8 large-10 columns end">
		<?php get_template_part( 'template-parts/content_comments'); ?>
	</div>
</div><!-- .content-area -->


<?php get_footer(); ?>
