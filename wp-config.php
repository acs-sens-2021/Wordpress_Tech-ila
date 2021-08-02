<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Tech-ila' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '9Z05zJH5PC8pN9SU3YKLRTxkTAHKy0bZWYtyokFJoK59U3Je8KQJY1SaynSaF9tY' );
define( 'SECURE_AUTH_KEY',  'NwkJn2nThM6U4yO6Pf0EZ2QYiD96cAKk9udvaE8V0Nu6gBA9TmA4NGXi9yGy6Nut' );
define( 'LOGGED_IN_KEY',    '4h6u1T7Y3oXFh8IaLfnJcNvuwUqTVoDfXHjKOK4xRc0Bce4uuWUcLE7Px7sEA5tP' );
define( 'NONCE_KEY',        'SXZvOpZPLPU9nCPtOzxs4iKpKDL9PQxddE5hALtlD3bpCCjZYNTT00CJlrmZrmqt' );
define( 'AUTH_SALT',        'RNBSBa7KLyOBke7U7Ut3DaWCO41gZkMPx3RoktQKpEO59QV79U8X6sBonWngJgig' );
define( 'SECURE_AUTH_SALT', '8ylCe4OPwaGlzN1Z3UG8RWB93ki5J9FKmfWDYANm94tA5sprJtr75qJVMu9ndwhC' );
define( 'LOGGED_IN_SALT',   'yJdxu7BrTIlCMFPPfkwAg1WoV4hPGFcOrPKskgIQNaAgac7GXYTTkYYeNOMWS1eC' );
define( 'NONCE_SALT',       'bT9T03sjAdlsBR5qabFgyiPMOBX4mpKd1kLn5AN4sqPmLw3DNyew5GkFhI0fDOuo' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
