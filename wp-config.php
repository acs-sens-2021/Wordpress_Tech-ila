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
define( 'AUTH_KEY',         'BIE8bOTBqYwknce9whCTR5bh7a36BR0GnYAWqt3Y5SvkWB3P00PFqp3XtLjyNyAR' );
define( 'SECURE_AUTH_KEY',  'ozc5AGWg7K5cHu7P8cefzHQlaLAJ37nVdr9XNxgEQl2zXepdGaaTTyTv3FB7X70S' );
define( 'LOGGED_IN_KEY',    'o0i1gGVVJ7e88iFW2VjxVwXCIAEoEOzQwe6yC5trssPedgPLMLx3o1tQCVAB1sG6' );
define( 'NONCE_KEY',        'R0vZUnzK0khZ7oJpGKGntrTJMrqI4yMD2i6TnHB38WttJLo8V7DizUpwSFRWlF1J' );
define( 'AUTH_SALT',        'tu6gaFApN0UeamJoachGCSbhvQjng7EkajUiJ5u9NQb1UktXQPksog5B89BsqKSS' );
define( 'SECURE_AUTH_SALT', 'KwfQruaYUqBvw0o88AliiyAfyTpeXCQLctGx85r1raHOVfMAn5xS71R9Uia5DCTK' );
define( 'LOGGED_IN_SALT',   'xPSx6FeTRcAkcrNQitgPjdpVh8YmToJOPpI3P6uP8dxLBo89UU9TowGlCmDkQ36F' );
define( 'NONCE_SALT',       'qIoWrbMUpXS5unQmFCe99rFXbuRhdJkq8Rp833sJYchZdN0IgEaJMlCiMoBw3UaG' );

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
