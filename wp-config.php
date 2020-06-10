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
define( 'DB_NAME', 'ecommerce_2' );

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
define( 'AUTH_KEY',         'NeD(+h7l$ps:Ge#1O+C&C7*<?_H>5{<)$XcMY&.ppVuH=Pzr5K) =&ikrucik.RG' );
define( 'SECURE_AUTH_KEY',  'G*a4{^X1FT8v6gsC!:j7,)(wq}(~|v2[5G!gNZ<}VUd;},A.V FR(/o(3SW`S~A[' );
define( 'LOGGED_IN_KEY',    'p>>#&K|3U`,*izgmLVBn-FA=]TZ 0Ef[}TD)jw(Vi*:_:j?wcqtqi8|oC8;OA}e.' );
define( 'NONCE_KEY',        'Z)V8z@#=keXiPXbW$fcI,}P@2L[9ruFl!3p_:2hu%i,@B6Ej=)hag,WPC.3Cc))E' );
define( 'AUTH_SALT',        'fe:R;W4Nz~=Jj$SzXrQ%9H(ik)8<AWiap|<u~VA;A^#d<fxd^Uyx3YN-`%!bxMCQ' );
define( 'SECURE_AUTH_SALT', '3lO-D9V78CUA4qwv?at(D8^t5>rpU_?c%^Nra~lv2bUuX,jtw;s#RF-YI dQc.K%' );
define( 'LOGGED_IN_SALT',   's$Xfg1?t -p}zF1T{V ,H3@Pf/[Z^#u+s0J6~qE1)K+n;`l=53]h$!`?&f8o3Xll' );
define( 'NONCE_SALT',       'h-~j}21PO9rzRd6tZ1{^;22Eo,wNNl_)=&V[IZRts8UL|U.2KC; !b9/XA{HB]h`' );

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
