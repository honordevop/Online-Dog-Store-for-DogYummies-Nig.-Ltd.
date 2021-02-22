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
define( 'DB_NAME', 'localhost' );

/** MySQL database username */
define( 'DB_USER', 'honordevop' );

/** MySQL database password */
define( 'DB_PASSWORD', '08164462713' );

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
define( 'AUTH_KEY',         'p}BUUhLP]4*wLu-@jG)cesW:yhe_6UMBsJ^Qg<F<`7geiJ9AXx>{#Mhy& &aVrRw' );
define( 'SECURE_AUTH_KEY',  '5:7E1<~NR}n%&g#,^B1G+IPNH8.h;Nxq$(MS7q+?F6g2giAHQ4N!rao:+`/6VIJ3' );
define( 'LOGGED_IN_KEY',    'QtjiQHTaESOy1>!6t=E8bkXEJ9C1~,1ODaMk1!miD^q_MhVVv36sB73y=7Og;J2Q' );
define( 'NONCE_KEY',        '$C_GprFLuz_f^Ikn{-HI*_!/_VA+gOj&0oqeB<)v[K(An&{)2/|vfE;(E/ponaSC' );
define( 'AUTH_SALT',        '8z8}*) TkkWAd,Kgm3QkGX-[[^`PLI(5+kf7d0Eb3HmF] `AM_{r`N;}.0kEeMPI' );
define( 'SECURE_AUTH_SALT', '7aE k-t(#dgpLFdKM.Y^1<bxkJu8]SYHpV(8_CmsqR*UC|`{KrIVhfktWy_/<C4b' );
define( 'LOGGED_IN_SALT',   'mR6D$QH{tfJCO}N%K>pe.j^YMnCX}OvbsKz!Ead}!8}mqFsU?{~W:^rVgA|KP~n|' );
define( 'NONCE_SALT',       'eky(ZG*w:&DJO/QX1n(3_Lt}-Bq8p:yI~DWW*8]+UWytd%M(=0C2QIPsX#Cn^n[C' );

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
