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
define( 'DB_NAME', 'AirbnbWebsite' );

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
define( 'AUTH_KEY',         'HIo8JbQ2sY?<A1~aB|s}8iHF!hx.q#0c [% C$gH)ALW50;&3LXGV}UvjaF]f6E~' );
define( 'SECURE_AUTH_KEY',  '/z~&`.zS%t:dSyv.0RZKR[3-E8<#@>(0gt.,&a5$w)rA|9A%(;r<+5|+^#YS)eC,' );
define( 'LOGGED_IN_KEY',    '-}zd#Ia>:Bm^+w1<,BsNE-wy~-z{x%iZQH|7PK1ARFC]s+t<JFs{)7RvR{!j=h#N' );
define( 'NONCE_KEY',        '9`C`S:>llMF%4OI*u+6Z$#.U!pwQe:{}j8.1Ov}P2`&k%F8NQ.iG{AIw#7~rRDhU' );
define( 'AUTH_SALT',        'u$OL~Mu+H*}uw3dF@~]9ZLV`AKogkIFz Pd]-lS}1B%mGRwY|rQQ!KV]`6T|fU*X' );
define( 'SECURE_AUTH_SALT', 'jyYY7D|*& &Uh&=F}!9ht,Xu5;@|-D*VU#K^HuwexLuqwRH~9K!YVAhAd Ptl@z.' );
define( 'LOGGED_IN_SALT',   '.*]+t1bl:|y+FUKm(xzd~<YO L=6z7KQ.x( br,O!xim/fBnrLO<LEFkpxT(1Yp:' );
define( 'NONCE_SALT',       'F0<-gQLPNAiFJ.Pcv0&#2]]VRO(ugZtQ5|bV}mk<i!je~R-*WJ7Yf&;9.,#:2OuN' );

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
