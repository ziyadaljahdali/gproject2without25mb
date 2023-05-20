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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web' );

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
define( 'AUTH_KEY',         'mx$iQ/Ep~kS{21nBQw?I.W^ 6=MeBuJWjiZ91YTUauWrocLa]L+ZjJ|H]])1)9B@' );
define( 'SECURE_AUTH_KEY',  'gwP;OP-@Knm.Y:8#q/d{ggq@=Eb>;?iot:4KeZ`t:[v6^vuYE}cjH=<83D+M1H^^' );
define( 'LOGGED_IN_KEY',    'F=Mgo?hu:GFXG>y5gC-^v+5pL$ZG#z&p-aG1w{;?YtTD-K<Vc:1y>DAT*y6S22b]' );
define( 'NONCE_KEY',        '-H&0AG[&Z./G:*}+^8vCj8@H<:s)RyT}F,sH?:xah/~KR~.JveX+Yy8,k(~{$t?$' );
define( 'AUTH_SALT',        'GOU6PI_fnS+#cLr_<IIhT%G^(s;?!dzff91Q@vDpQ1Y]Cm+(MY_GRPW!xzVYt:-%' );
define( 'SECURE_AUTH_SALT', 'fo62w6ky,46&et<Nk?:.ho]W=Aj-_JVdNF!-9-`Zdkstq]Kj:m0GiF._k5ntBT(]' );
define( 'LOGGED_IN_SALT',   '@&w}TEeo9+.8-aHfxdp%#`SF+|@,$;=Eeh7Uyb)?M{F+V1e[U]7qBsNI:g g{!tJ' );
define( 'NONCE_SALT',       '[e^ksU>0^4LD<}.U!A(0_]M}(m=w|ljv@]wTR$q IOVxrGfO)6h:&wf=2hh%bVMY' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
