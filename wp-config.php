<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'test' );

/** Database password */
define( 'DB_PASSWORD', '789789' );

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
define( 'AUTH_KEY',         'S;:X=Bh_o1g89{|S;oO<kgOUEN!0,#V}#v3w{/!$rshZ7kAr*6@T#mb,Ruk&@)]V' );
define( 'SECURE_AUTH_KEY',  'i0~dCuxSh@/#e;z%Jz]w>xf.%8Z_V,ZJq8Ip{)RZx7t;jh370Oe()iO(Gw|~+#x~' );
define( 'LOGGED_IN_KEY',    'c:0z|XHhf)~Y|&n=RQuTRMI.xtJo_M;$Nf!IZp&UTOgO}CvuG_JoxjS6:50>DD4#' );
define( 'NONCE_KEY',        'C5oGuwG1hk2RaYMJ#w*Pp2rQ_M#!fGgbDeJ^MBG-[>Kh=!V<o[SOfRt`D8(!ix9`' );
define( 'AUTH_SALT',        'WYj[KHlXF%T)HW3-ydGxIxz$3*e%6tUozueb==TAuC0l9^+ /@yOJ V_~R((giwX' );
define( 'SECURE_AUTH_SALT', '}/T/R79WG:[LN3VxW$<lH)&!A[nP4^2a/AzCo<eqcZV}$rAxe9x`x1k6F68]Xsp:' );
define( 'LOGGED_IN_SALT',   'jR6pw]:cvXDAwi|7+?N;HEMUKw*N!o}|N+XjFLxldI,dri=[<,uxrad`/3YZ^#n:' );
define( 'NONCE_SALT',       '@vwIX1>sBy9Bt|hAp-[DZj4|3+1a()hVG$2e)P1]E-Gd{gf`RM~9IA9Pcix:e* d' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
