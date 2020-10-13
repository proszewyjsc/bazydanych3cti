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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbcloudy' );

/** MySQL database username */
define( 'DB_USER', 'dbcloudy_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '3s%DR58fQwU:f&3;7$bh&#K-`Bt=3#/r.CEP,$kl!0n|$~fmr_4eG&l9YVTUb%|L' );
define( 'SECURE_AUTH_KEY',  '^58t%5Y15]%dM2]DwZ;sH|d9jH`6-:9k8S`?U(z&euVZvIVT(50N{73Z>-^W9ziJ' );
define( 'LOGGED_IN_KEY',    '9CwZN)O[AZ.+,qMT5((eAvC@E=bxKq/WrC0b4JDIe(B?$%D0]bmn5COjf<R<$@/w' );
define( 'NONCE_KEY',        'H3B$@L!xEbkau#$oXOVZ3IO4n< 3E2EE,BmZ3Dk1^]U|0oB,SW_2?OT(*?nv:T]`' );
define( 'AUTH_SALT',        '`5(E{MaRgO4eP)14hUK=TxzagW=H5]})XoC2ygXpoc_i[OnA;1NAK$_w}) {j?sd' );
define( 'SECURE_AUTH_SALT', 'BVpvJNO|<}E^3&48L}s^PRJK>q3EJe<Jy9 >&u{m/y/U-^ALK`i3#=_Jwu@zIAQ]' );
define( 'LOGGED_IN_SALT',   '$fi|jy?oqw -G<Myg]tJHjj):yp=^fK3?<zd(1bgB(sk0y4moQnK*8Lg_*IDL`1~' );
define( 'NONCE_SALT',       ':D>?il7%{h}rqLH]7$zh?I8NAol!xS!&Jo6TY$p9Y*>*H=vqD%CeJdj6u<yUl!>)' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
