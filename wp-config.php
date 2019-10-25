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
define( 'DB_NAME', 'art-frames' );

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
define( 'AUTH_KEY',         'u@`[$AZ|Vn2V V/.]!=4c4BPe)0@_E;9,SbxM0rcb=wXbS|I p}A,HuOS.X[d<m$' );
define( 'SECURE_AUTH_KEY',  ']Amsiq~6KS*U1x[.6ovE?Sn-&6+<=OUKe/C.xgg`~2WOjaI!PJgL2b+q=] F1c`G' );
define( 'LOGGED_IN_KEY',    '>BG+nm V>{ Fy.F:.urMpw#^Y@Ji`Z;OMTv[=<lz)92*16G5}7rq3]/,;|5<cqsA' );
define( 'NONCE_KEY',        'S$|n|H)&>j%[o+HBTqC:IjosFYq.YGsAYeY6)nn@@Qx-aeMY*=*z;^|%XQeSPIrs' );
define( 'AUTH_SALT',        'Hs{c)I-*S;6B{E94PJW8^VsDAy~3Ks4LyR,Xj!*:-|/Mh1PN D$l#R*^lMy@Tr9a' );
define( 'SECURE_AUTH_SALT', '6xgCI18^!@shKi4?u#:I+2;SHhI$dRM~h4)2s&*r3bW:%u1KEg)qYiBP.:+jHR|M' );
define( 'LOGGED_IN_SALT',   'v=6eV0DM[5KU^<ZEzbii^[-1kDeDJcnc~aq2fUcxM|&v[xlOR!wY;,O*_,ZX4TSD' );
define( 'NONCE_SALT',       'j =[G{4t;&*Bk{xUU76Q8/pyy^[fP?}cq;jpi4~iiD5^ZX!!q`+MojBm3zt0Jk1-' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
