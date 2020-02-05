<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'rootpass' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'R^l5CG/5<f 2OUbmN&.EL(UvJf?V Eq<G1.{qxI0M5b~BZKxP8jX(N:E9Q[ :GlU' );
define( 'SECURE_AUTH_KEY',  '?fZ6V<f`w!(tI$0^TD8me-jXfr|z bu[.ZX@1C0Qj5l`r5v|=}{$5r jIiMfI{rs' );
define( 'LOGGED_IN_KEY',    'fab:&&1O7:LHz!Phx5@U gGi+Tub(YG?}cl&[M6he.;q8qz9Q4oau<VT170,>uP_' );
define( 'NONCE_KEY',        ',6VV?qV?QLNb${oq~(gS.O_.b*gQ:^9@jXW@Q/cW5*BUY^|<DpTk;f)pzH(8|kgU' );
define( 'AUTH_SALT',        'V[8{(X@AM(x#=*{1V=MW:xIbUf<t0$Lax9Qlx+YFCndxLEO>)|lF]e]?CN,o^V?<' );
define( 'SECURE_AUTH_SALT', '>J#l#:jYFKecK#@*,9tykaIa?@M*@GCZn*{DZAqXr<-3o+VML)}sLeiQUOr}ZZym' );
define( 'LOGGED_IN_SALT',   'HU3QIh6o&{w59}!GZYVxT ^B6[f-FjWDCMqG%R.oz<~+I1upTjS[>X4Z8s>ovUYf' );
define( 'NONCE_SALT',       '`SlO/m&43{1oBG4Yq>8a|<Qxh,cil[XQv@&jQg!]ESX.*K!ugQzy{=NmQ$_{elc3' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

// Custom install theme on local
define('FS_METHOD', 'direct'); 

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
