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
define( 'DB_NAME', 'solaredge' );

/** MySQL database username */
define( 'DB_USER', 'alex' );

/** MySQL database password */
define( 'DB_PASSWORD', 'samsungsamsung13' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '}u*ctrRQn1(LbH3O~5c+gIe?sC~!2 k>aw/^yVpDDo$uMe>2yU5lP*sIq1x/{v1u' );
define( 'SECURE_AUTH_KEY',  'FWZNm4j8HNpz`Lfp#Qc:b(KP_&:^d?lN4 ^06pHTkCx[<|TB{NktvJv*@5Q>TquV' );
define( 'LOGGED_IN_KEY',    '}S,M?t;31 D.-?:2<gC6[@b/?ECe]*t/utU`yh<>QQ(7}(30tjAh jF#n4^WUj&c' );
define( 'NONCE_KEY',        'v9#m*d!P<C(9uHM,rdO.K;[gT:_|U{jGL@t_(}oeeQaO<Sm)LfGZwg/%7jIdj{:U' );
define( 'AUTH_SALT',        'cpuBC6f&]OphEQiPjB;,HdW4NZf{w[`J1*x:0n-]]8EsT^cCdKb<jLZ*Vg*}*=|E' );
define( 'SECURE_AUTH_SALT', 'k%c*9,m!pc2P7hq#c(bL rFVS,$xOoD<3ZW_Mxf]n<|<R?*[ttEy*<Uq7)K8EYK<' );
define( 'LOGGED_IN_SALT',   'yx[#Pe*s!{$h5xo!nC$KnNf$Zg(zT?OR-N)qx!PsT]q?^:s?@^qa=^JcZGl3s:25' );
define( 'NONCE_SALT',       'r{R7d!QpjLF%QpM<oiYE>e;wG&X0`y;1mS6_ZTzbTXifBsh,a)m4Pe3Wi7Z$C(}o' );

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
