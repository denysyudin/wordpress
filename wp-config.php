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
define( 'DB_NAME', 'wordpress_db' );

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
define( 'AUTH_KEY',         'UBijIp?T5R}&){nuuK(<SV0(196A_yu1}%pD:x}Hip;-SH8(S&vxgILZUyX$$+wW' );
define( 'SECURE_AUTH_KEY',  '):XKsOnvQkW|6~MdiTl}2wjpjnVpNN$K3j/AI[`8`&9;G.N,Ebc?y:5>-[)&N~Y0' );
define( 'LOGGED_IN_KEY',    'd?gh@F-B=c,V00V%LI##q#]7ki0E7#*^]<M.r~y>q>zO<i+;lBz8-NUQr{U^S(|b' );
define( 'NONCE_KEY',        'q$h*CiH?H1BP<,qk!ddOymE.;%#nI+@<[=Q)1)-~i&2:a~>_i=h?$1YL,O ]T),]' );
define( 'AUTH_SALT',        'cmf;Gb;sDBC415afp<3a}B<l:];~F$EWg42WZ!`}Po;<6=8&A)~,8bf0)-@H0TWp' );
define( 'SECURE_AUTH_SALT', '6^B!:,CxW|Hh-Wx+&<iZyhCm3;5n(!_=d^=N?5x&OJXf+RtbyBfg:T{RqeVK|Z|K' );
define( 'LOGGED_IN_SALT',   'C5)AYHKq`;Nc Mt)O196vCjwnnO =S7Uy#t8F1LSITwbxhJO]+X=[whluGR2TqPO' );
define( 'NONCE_SALT',       'g0E{eRg1%hq.f^G_312h|UV]<C8Bs6r&384]urK=O4(o}E 9jmQDXuQNM[t#3e_8' );

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
