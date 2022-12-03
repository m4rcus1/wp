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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

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
define( 'AUTH_KEY',         'YUxZN*Q_}#n#lv0VnZYUJYhn]#e1mXG+xusn9.0pt!NQo9l[Rdi1r<>!@vqr*N^1' );
define( 'SECURE_AUTH_KEY',  'm^>p3o[|6>wZuZ$gGI.l00k>}Ga,nVk 5l<//n~%]!/0vrNm2PN;)rzkPeR_Ghgk' );
define( 'LOGGED_IN_KEY',    '&,r%.EQn;KI_qqg9E[)kDhjr.NHW6o0a1vpNEz9,p-}QsR8N ;cP!W42-/rsQ:zk' );
define( 'NONCE_KEY',        '<smZSIbQrDb[;Z,E|pA!Y)6iz6WeJn]ItanWTY-|3g_5Bnt^+rx|sj%r:n|_OJe2' );
define( 'AUTH_SALT',        'BVVR8V/}_SB@@seGAe7&|9:*,T7M?NbMDb&kG@@mP5Y:V>}JGrvjvf8BSE5N~PJV' );
define( 'SECURE_AUTH_SALT', 'QZWz^h([<,?dtcP!cayHDXm`u`7NUTsjrc=)ru^hDj<-?]|#nsk*[b+^WTH<+,-z' );
define( 'LOGGED_IN_SALT',   '[8kkoWY4M]e~Onr8l0VVOh}!S4,{gqbG^g5xn)g5?u<VV{bjX% 1bA<pW0Dkx}gD' );
define( 'NONCE_SALT',       '-%~kB?RDxJZrYLsqsJmUL[2?Yut^L$%zvM@^8UzTu;M&Eho-LT-Yfmm?35DU`k=6' );

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
