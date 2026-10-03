<?php
/**
 * The base configuration for WordPress
 *
 * @package WordPress
 */

// ** Database settings ** //
define( 'DB_NAME', 'old_daily_city_desk' );
define( 'DB_USER', 'root' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost:3307' );
define( 'DB_CHARSET', 'utf8mb4' );
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 */
define( 'AUTH_KEY',         'x8K$m9P#qL2vW5zR8tY1uI4oP7aS0dF3gH6jK9lZ2x' );
define( 'SECURE_AUTH_KEY',  'bN5vC8xZ1lK4jH7gF0dSaP3oI6uY9tR2eW5qL8mK1j' );
define( 'LOGGED_IN_KEY',    'vC4xZ7lK0jH3gF6dSaP9oI2uY5tR8eW1qL4mK7jH0g' );
define( 'NONCE_KEY',        'mK3jH6gF9dSaP2oI5uY8tR1eW4qL7mK0jH3gF6dSa9' );
define( 'AUTH_SALT',        'oI1uY4tR7eW0qL3mK6jH9gF2dSaP5oI8uY1tR4eW7q' );
define( 'SECURE_AUTH_SALT', 'eW9qL2mK5jH8gF1dSaP4oI7uY0tR3eW6qL9mK2jH5gF' );
define( 'LOGGED_IN_SALT',   'dF7gH0jK3lZ6xC9vB2nN5mQ8wE1rT4yU7iO0pA3sD6' );
define( 'NONCE_SALT',       'uY6tR9eW2qL5mK8jH1gF4dSaP7oI0uY3tR6eW9qL2m' );
/**#@-*/

$table_prefix = 'wp_';

define( 'WP_DEBUG', false );
define( 'FS_METHOD', 'direct' );
define( 'WP_HOME', 'http://localhost/daily-city-desk' );
define( 'WP_SITEURL', 'http://localhost/daily-city-desk' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
