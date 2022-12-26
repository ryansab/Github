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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'devops_wp' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'ryan@555' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '$~:]+vm:zsfiASSn#`X0%4-}a4$RyHb8B7+/|&s||-Ya@E$$3+I!m64[?ywCFk%N');
define('SECURE_AUTH_KEY',  'q*Dp/)}gY!xme9~VhK-|K,Pe$-porge@x]zSmm/|B>mJ.[n!R]#Rt3IO:Cb,<hd0');
define('LOGGED_IN_KEY',    'Z |Et9Y`XG:@*}>?OPcd=<nuUX:`@e?E3fHp{|,XHx2<tp!9WlFcer>Q|_?tbwwA');
define('NONCE_KEY',        'I;T)wk0K[f*E?|v /%M+}**QXs8;GX!{uU=f=+U1b!uBE~-mkM4HxH^&VA]e4,`5');
define('AUTH_SALT',        '.^FP|HkD$+W}a07BWxjO]A>/v808kVh+LIrb_CGjo#9&rAHAf0+T[)&H+w0~|lgX');
define('SECURE_AUTH_SALT', 'pvZY|A2xL^^ xzz.}=,$mub}uaR/7vM|#`-)2SZ.P%o1O[CUI9S+Ye,H+/E5?m<f');
define('LOGGED_IN_SALT',   '8:5mox>/S5B|(ZQxgWMxy@Qs%wP64Qp}r2-(6b,IRcFw|2jI|;|l.?35{YOnuf]T');
define('NONCE_SALT',       ']VG;&scI-cDFX;aJX.Q7Rlu)1(S+=%~a%vFJt}Pg/G9M=mM-<?zc+5H{.NJJS ww');

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
require_once ABSPATH . 'wp-settings.php';
