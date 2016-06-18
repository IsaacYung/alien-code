<?php

function get_asset_url( $name, $assync = false ) {
  $json_map_url = get_stylesheet_directory() . '/asset-hashes.json';
  $asset_name = json_decode(file_get_contents($json_map_url), true)[$name];
  $url = get_stylesheet_directory_uri() . '/assets/' . $asset_name;
  $url .= $assync ? '#asyncload' : '';

  return $url;
}

function enqueue_style_helper( $asset, $dependencies = array() ) {
  wp_enqueue_style( $asset,
    get_asset_url( $asset . '.css' ),
    $dependencies,
    null
  );
}

if ( ! function_exists( 'ac_fonts_url' ) ) :
/**
 * Register Google fonts for Alien Style.
 *
 * Create your own ac_fonts_url() function to override in a child theme.
 *
 * @since Alien Style 1.0
 *
 * @return string Google fonts URL for the theme.
 */
function ac_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Montserrat, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Ubuntu font: on or off', 'ac' ) ) {
		$fonts[] = 'Ubuntu:400,700';
	}

	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Enqueues scripts and styles.
 *
 * @since Alien Style 1.0
 */
function ac_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'ac-fonts', ac_fonts_url(), array(), null );

  enqueue_style_helper( 'app' );

  ac_defer_app_script();
}
add_action( 'wp_enqueue_scripts', 'ac_scripts' );
