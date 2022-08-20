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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'T#f!hvukK&z b2tZS5pa0b&;2lIM)1|3!N})&l1U/M@Cqk0=_/1.GaD)TEtquwS8' );
define( 'SECURE_AUTH_KEY',  'XAQwkckl,*eGpusQ4Pvvf@?e+Z4NN~ir2=>>ov)W&M|=#=},e(aIOF=?(4|Er_WK' );
define( 'LOGGED_IN_KEY',    'dZd>itwj; dTBq:/wwA0zCD?`7PD-] @u@zOJ j9dc~yIPl<Uhm&Ai[Y1LF2!a>{' );
define( 'NONCE_KEY',        '+Q/*6>ZoxDYq/ds4msx4PW4l&:_?AbS`~6wv[(p@Us<tL*O^NDE%NWz*d#?,7x|M' );
define( 'AUTH_SALT',        ')A5vEzfWFi8Ng-DhY]{qC392&#~Espn/CuCd^*~6L%`>LmyoforP,gqEa||&p3H|' );
define( 'SECURE_AUTH_SALT', 'OBJi%u?/6!T3@)[r@D;2guU9{O:?|Z6ydcwGua_>aeVF[yOme{6o7e~-E;kqL~Xe' );
define( 'LOGGED_IN_SALT',   'r?d3na7~$L{@fOb/KBE3>M&#%A0uAeln+Ww^9OUR;/RdE|];m%~s;DJr,a}AhYzu' );
define( 'NONCE_SALT',       '7wgH.O_}.jVP/{ks`f,Fhg[Ij2%LiqQMZwZ]a@[O7g Q0i2FYv-@|~AO@}>hH`~u' );

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
