<?php
/**
 * Template for displaying search forms in Alien Style
 *
 * @package WordPress
 * @subpackage Alien_Code
 * @since Alien Style 1.0
 */
?>

<div class="search-div">
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search &hellip;', 'placeholder', 'twentysixteen' ); ?>" value="<?php echo get_search_query(); ?>" name="s" />
		<button type="submit" class="search-submit icon-search"><span class="screen-reader-text"></span></button>
	</form>
</div>
