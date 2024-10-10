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
define( 'DB_NAME', 'evolugrossesse' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', 'Admin1234&' );

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
define( 'AUTH_KEY',         'GD<5wD]rbOs*1?DsI{qwa2P[FgsBy^%E>P,{JY[csJHbPK%=1CPTZC Xh3Gi0dB6' );
define( 'SECURE_AUTH_KEY',  '/W6e$VJuacs^& NZhIPt>$Xbz lht1<Z9.JL(DwW5kqdWZ =[`;B?}ntj~|E^|{_' );
define( 'LOGGED_IN_KEY',    '/i=zC(du}_m:XC%Z)oG{hQexHj{ -qcAOwX$W[KI*94R[#K:{bK@E7TAy<#:H(;M' );
define( 'NONCE_KEY',        '@XXMi[@BI/=b8O1+)@CH)rQV~DKij 8;GG>@o8uwjGf7+HM6oXe!.q!4[?YBeWy8' );
define( 'AUTH_SALT',        'c#YPcv/ffLoy)}~AU}d%Kp@|QGLqmQa9Z,>K4V^HIY8qv/55c5Ffu@pS:]Hqe7>Z' );
define( 'SECURE_AUTH_SALT', 'jG;okw+vZSfapaJ9GA5GR8{hFJx{iq(qlNaUDO~g=@Gb7Fm6BMkER5=|)w5SaW{%' );
define( 'LOGGED_IN_SALT',   'W|$-Y(*>f$2.wbzYMsU0*cJ4,w>m{^)U[Q/QiIk3!>eQX&FA--~}/yJyh!/+8W7P' );
define( 'NONCE_SALT',       'H!fO=juYzGULNQ.ux_K7%Y+&Zhg!f<7; i=<,T&C}N3b8qcqzFiGv0iV=Yvphz_l' );

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
