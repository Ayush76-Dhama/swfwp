<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'swfdb' );

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
define( 'AUTH_KEY',         'O=Q]g 7HSY5dU5DR@AkGDh^iBk}!U7m*.1wx3:<22eq{V[%lEJ&z{~|:CvjxLz>A' );
define( 'SECURE_AUTH_KEY',  'V`y &1f,6Usa=Ya[HO0cY>A_=jAQHkq-)`KR7v.b[c/>,Eq#lUvhv2-LB(v~yV4}' );
define( 'LOGGED_IN_KEY',    '8Bku`O;%,s(T{3?Y=uD1>Ai<9x,LTqcWw-Q m?ym`w-_/<L~jZIpY^O097n,v@sW' );
define( 'NONCE_KEY',        '+JbW$Gj9`)xR$[|WC)eVwJp57+GEbo3$Sn)x7Nno21(#7>4/9u2%z-d?Ai)xZk|,' );
define( 'AUTH_SALT',        'keIo&{|j4|9C_Jhh,iP}#x`=A8DMw?lR*&u(<Xlylbx:UM j2z9YL1|pnE4mv|)6' );
define( 'SECURE_AUTH_SALT', '4:FWpCi]-1qkB<G:#[az@~e$eL1w,/8&>#Y{M.MqG`[:MI_U%FVf1{l^G;`z>zQ?' );
define( 'LOGGED_IN_SALT',   '?YPwo^ni-jV@9P(dgTw[!fT|VEKBG17GyHg9>F 5{u zcUI~*nB}BKO`>A=EHTmz' );
define( 'NONCE_SALT',       'k~~+%jMlDZBJi0pc,TlH{,Xj3- 8(j4mRY7.U8W3,W5hB866D?;L,s~RZ+dC3%d`' );

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
