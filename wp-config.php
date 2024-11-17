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
define( 'DB_NAME', 'my_wp' );

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
define( 'AUTH_KEY',         '9=V,dt9rayi>^$5;t>tS%$eZMk=7k^/,OP3l??}=7qxJQPc7(,A+|1xc*@9:2WlD' );
define( 'SECURE_AUTH_KEY',  'MXVREO:]FZgv@>|Tv-C6ZX(%ptfSv*^p5#9vKEX:%DwB2<U^mMq&Gkc#JWY#+V=y' );
define( 'LOGGED_IN_KEY',    'r?xLi<W26(G?:6#@x[PPc N{,<#b $N?^ab1mt}B~.qPD4wQ`&.sDj^%kw{K)%jc' );
define( 'NONCE_KEY',        '2=$A|&]Lxd/MO=7>F[&]x+M|oD6#!m,`P,;AtF+z+O*p=3`k@Q<ldR-?_=d{4/yI' );
define( 'AUTH_SALT',        '_WKA|faR;{)IRi(I%h]L~X!!Bfn [NA)nUZB@WB)iM;)yd|QF8hOJG!b3|XiRKFk' );
define( 'SECURE_AUTH_SALT', 'oGW]2W5uXK-;|ov^iNo%=:,jP3bi+U9yBsnDCNnjO[?VF6Qykb|W>C&#vzL.:1f=' );
define( 'LOGGED_IN_SALT',   'b1nzNGt&%z2$Vm*?AFe5O5IwI+:1N^BAj8Ee|IVL20gP?_c06FR0{t3mONf|QLK0' );
define( 'NONCE_SALT',       'c,P[%BvwZ[O2}([b{Y$Y=EBZwL;,Yi6hPI(5*F:92=kS+js^Q-^_pVGN<obwG<B]' );

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
