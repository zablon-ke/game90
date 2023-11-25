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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'game90' );

/** Database username */
define( 'DB_USER', 'game90' );

/** Database password */
define( 'DB_PASSWORD', 'game90' );

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
define( 'AUTH_KEY',         '-*Un+?Nv*wyteuUxc<@BzwYnP^H-$ohmJ-Wp3[6Af^)>[va/EVWv|w_a-Kog:&8k' );
define( 'SECURE_AUTH_KEY',  'ctpN&TD0Z5}MPxu9#CKaaenk*K}/w8sE%CSCoL<(N1ipog2(DE{WB[Sk+p80|pE&' );
define( 'LOGGED_IN_KEY',    '3f$eq{-iV{~sa*Tj%Bz/l3UFmVk`,I/j2B3?Vn>q/^=X!4`9k1/NY3NO^-+ip$PI' );
define( 'NONCE_KEY',        ';Vd:3fF`!YvXeu]ENl$y.[K0z);yl`UK((AQl]O1*E8d&w7:<3vne7A&k[Y_10uf' );
define( 'AUTH_SALT',        'c;[W,:KR^;h&/*:+2+.!)nN^95rpk=0~gXp=!!4)N]TOI// 63,86&EcWJD`*rb0' );
define( 'SECURE_AUTH_SALT', 'hNAFuV4upLt[p_O_cW!^ML+ZoVmLy8I[*YYQJ,K56DcV2+U#8hR41a^TC=OSN($@' );
define( 'LOGGED_IN_SALT',   'v<d9.^rRqW}p43CsoD]v?M,R|~IM9xEh6;k0K_~*m5*0GTxg<T:M$cC !wMu)fJ?' );
define( 'NONCE_SALT',       'N!][)*FB<Z&owxKtq#{xZ}GIFTR+6?KQik(9GfiQw~~x4O}dcb&<Gu3@9`h,x,-#' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
