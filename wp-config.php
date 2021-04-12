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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UJPnHd^+zfJ/:xp2{o_#dyzWNUl=B8q-Zm~lQlQ`?Z^RwI*TuVxsWz8r}kxIHzbD' );
define( 'SECURE_AUTH_KEY',  '03n+l(M2qNPC/`IYz]&*dQ~,u3kc#&+n7[9=LP(HqF}X3QpI`)tK:w;:G%d_k 7o' );
define( 'LOGGED_IN_KEY',    '8,ApZm%RbLH124Yp_isx9hpCH{3Hmv0Bk-K2mU,DB_JefEXIbojNERlHQ^Fk]Ji+' );
define( 'NONCE_KEY',        'J,).&Su^gE=A1{RKJ80XS^P~EM]J#anL`M[BN#F9n~e.^tR0n=xEf3nvvcn/35Yi' );
define( 'AUTH_SALT',        '>@w/d#]6W2i{k oSY[3/J u%BMbJe$YjRqIR@~{f5%fFD1A/@vFv9r&$sT:ycrAt' );
define( 'SECURE_AUTH_SALT', 'IDADH/Ew]WuaBlxJDK:D{)glMWAThh~k|M+to8C1Yz.-SZ-8BP%oU,J/p$$L!gI2' );
define( 'LOGGED_IN_SALT',   'qxEl+wg^?C`MJx+=P!Q m.(g1VmVR6`X>.mpfj$/%%QNq|]5rt2Fn@>y&ZtlL}e6' );
define( 'NONCE_SALT',       'Bt&44PRy9SOjvir,ft_Y`v3Jtv+Jg[/&b%8Pam.=|TGH<tJGI:1JAiVGS+rVDVQ>' );

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
