<?php
/**
 * City Desk Theme Functions
 *
 * @package City_Desk
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function city_desk_setup() {
	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 720, 405, true );

	// Register Primary Navigation Menu
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'city-desk' ),
	) );

	// HTML5 markup support
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
}
add_action( 'after_setup_theme', 'city_desk_setup' );

/**
 * Enqueue scripts and styles
 */
function city_desk_scripts() {
	wp_enqueue_style( 'city-desk-style', get_stylesheet_uri(), array(), '1.0' );
}
add_action( 'wp_enqueue_scripts', 'city_desk_scripts' );

/**
 * Handle Contact Form submission
 */
function city_desk_handle_contact_form() {
	if ( isset( $_POST['city_desk_contact_submit'] ) && wp_verify_nonce( $_POST['city_desk_contact_nonce'] ?? '', 'city_desk_contact_action' ) ) {
		$name    = sanitize_text_field( $_POST['contact_name'] ?? '' );
		$email   = sanitize_email( $_POST['contact_email'] ?? '' );
		$message = sanitize_textarea_field( $_POST['contact_message'] ?? '' );

		if ( ! empty( $name ) && ! empty( $email ) && ! empty( $message ) ) {
			// Redirect back with success flag
			$redirect_url = add_query_arg( 'contact_sent', '1', wp_get_referer() ? wp_get_referer() : home_url( '/about/' ) );
			wp_safe_redirect( $redirect_url . '#contact-form' );
			exit;
		}
	}
}
add_action( 'template_redirect', 'city_desk_handle_contact_form' );
