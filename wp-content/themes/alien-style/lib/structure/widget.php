<?php

/**
 * Registers a widget area.
 *
 * @link https://developer.wordpress.org/reference/functions/register_sidebar/
 *
 * @since Alien Style 1.0
 */
function ac_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'ac' ),
		'id'            => 'sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'ac' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom', 'ac' ),
		'id'            => 'sidebar-bottom',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'ac' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Right', 'ac' ),
		'id'            => 'sidebar-right',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'ac' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'ac_widgets_init' );
