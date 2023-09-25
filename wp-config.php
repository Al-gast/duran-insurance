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
define( 'DB_NAME', 'duran' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '#:|cVB*xdv,9f%m,!CMxpX%#hv_z$#7pWK#EJ4pce #V%Z%WhLkk)_XLI:&ujU83' );
define( 'SECURE_AUTH_KEY',  '52SQl![9XFzppLTjB$_IG;R8rjFp-i]g._At@5AoBJ-_ypsBiUaomV/)1h}ByyL)' );
define( 'LOGGED_IN_KEY',    'FaBzBVb>6lgj-ywyJD]APO+IOt0i_?`><Y+81|J0V~UtlmI)q4FCAz LgLRCJ><&' );
define( 'NONCE_KEY',        ',wmAD*ozR=4M$:]Hv#U{U?V64sO.5A<ku/cSPOMWTw&p2H@u4QYDG)PYDBYJ%tpU' );
define( 'AUTH_SALT',        '3VB<WX/p<UOl+wG4T2I`Rd%wOr?|yTDAI-2p(K~*v3Jc)BTuBm#|A^4@MF[,B@h-' );
define( 'SECURE_AUTH_SALT', '7Y]v+O}{l?6WH!E#1kN).(yybB+ek=Eh!Bu?E7Q8 I=rGylgN2ghGoRPcCP{-|Bb' );
define( 'LOGGED_IN_SALT',   'Qd}9hg%6v63g 7pATDyy=sxPg~OPdj^iyr$inRb>21uyM2AdcejV5!=0adqv?XdS' );
define( 'NONCE_SALT',       '98eO`b8Ra3B;? nbzv++ijce*u^fWt4w9K65{Hy5`!#yF-`U!HeaqXdw5xwTS_xU' );

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
