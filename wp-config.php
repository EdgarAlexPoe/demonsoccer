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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dbgzyrp0c6h02w' );

/** Database username */
define( 'DB_USER', 'uyweg0rlnv2ap' );

/** Database password */
define( 'DB_PASSWORD', 'ypgciytrf203' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Y{hCdq5UGWY0JMiprr&b,;6*<<0/jT4|W9(D&7M>a)2joPBSL#=>DgoPk0D:*0qR' );
define( 'SECURE_AUTH_KEY',   'N[IZzq/6fVGe2i4+${,[VAE!O%z5&Ph+np r8/.M[b&LXNRmbi|~*d~m%|fvI*n$' );
define( 'LOGGED_IN_KEY',     'pO !;Ou&p@_w&i<aD#OF@V!{]!OP5Ck}+X~kwe%GZ1L|@v(y-VEttTiK-67gAu?t' );
define( 'NONCE_KEY',         ' H(KiC8v)SF{L%+-J@Else351UA?0j{Wg}R6&d>sqJ}p^COw>UsKH%.}GO.m`!Eo' );
define( 'AUTH_SALT',         '3j;i`[:82-ZfJFj2E6>*5qgd`2_nR|v5fJ<ZyQi[(0?VwxGW++#0,nR)m(h^0RJ9' );
define( 'SECURE_AUTH_SALT',  '/0_tYcdywe*}ax<n/6j%a<Q6yY=]tzi5g{&1>]Tx9laQ--XXzd93_plr.+`lgvSq' );
define( 'LOGGED_IN_SALT',    '#CR2^)9-v`CPWeF(*VKZ$wop64YPd5+#S)vB1bf*_Y$5>rr1zPDR6Yep7}1v6&2K' );
define( 'NONCE_SALT',        'C.h#z[?AHwBzcy!51T/&oOT@7<NfyLrxZVrjWdSv/!OlqFs 8a*CUWHi[o3x1:;0' );
define( 'WP_CACHE_KEY_SALT', ';ng}07:p-;ka#_o*Y%K&XGmw&)F!e]9_*%61dGq3j}$M{sCon2g8T5[x<.vjy~d;' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pzb_';

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
@include_once('/var/lib/sec/wp-settings-pre.php'); // Added by SiteGround WordPress management system
require_once ABSPATH . 'wp-settings.php';
@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system
