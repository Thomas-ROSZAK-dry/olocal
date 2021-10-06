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
define( 'DB_NAME', 'oshop' );

/** MySQL database username */
define( 'DB_USER', 'oshop' );

/** MySQL database password */
define( 'DB_PASSWORD', 'oshop' );

/** MySQL hostname */
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
    define('AUTH_KEY',         'h[HvhNNtz1Dn;{JzvNx=|R8lu)(s=ID<~W^pG/?+dbg^:t56bE13^@mf||$WNqQx');
	define('SECURE_AUTH_KEY',  '+S|yS)+(;9,yD_<ZTsJGi~=)03!aN-+bX-lBx#9;(8|!oi<_Kq3?[t,{QcRQ.-5k');
	define('LOGGED_IN_KEY',    '5<+%+<X}%}-i^$BoqAG~T0<tVU!7-KmzR4r]9#r>oX-d-f.{SOtN#;Me/>eg{Mhd');
	define('NONCE_KEY',        '!2&a~_b-b*@##. #2P7D)P[GI*J&&4Cno{+.Kw#cRHQ+1vz2>fbbzh<VyT?g|.2~');
	define('AUTH_SALT',        'n*[f0txT9On)M#X!C9qe_]~y~?w6:cak2V<)Oj9|>l2v&ZYHP-p6}(N=# T;=%pB');
	define('SECURE_AUTH_SALT', 'f0+JS;])n+AP#*:*g$:`k O/Mm9O{txwT`=e>]S{Z75YR[co|^[g@|AW32SqY0&z');
	define('LOGGED_IN_SALT',   's;p9c^lO-.wC84UM|el{H9eK/2u|r[Xxh2Lj0Zll|I`d|8|Bfd|%mh7y/qjr^[kX');
	define('NONCE_SALT',       'E{vb^bIMi>L]v%C<}AhpjtS=?kGG/]gZ2omV=b.m?4]~x3Y8%hlui9H$OK?wz, e');

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
define ( 
    'WP_HOME',
    rtrim( 'http://localhost/olocal' , '/')
);
define ( 
    'WP_SITEURL',
    WP_HOME . '/wordpress'
);
//  Je définis l'URL vers le dossier wp-content
 define(
    'WP_CONTENT_URL',
    WP_HOME . '/wp-content'
 );

//  Je définis le path (chemin côté serveur) vers le dossier wp-content
define(
     'WP_CONTENT_DIR',
     __DIR__ . '/wp-content'
 );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
