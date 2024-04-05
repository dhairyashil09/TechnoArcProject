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
define( 'DB_NAME', 'demo1' );

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
define( 'AUTH_KEY',         'xiofHMY&?5jw{8?33#yMS@!p~&0[;auWwD;(K$9Y[+$j(Q$gv8P6.^_* y^G_rKf' );
define( 'SECURE_AUTH_KEY',  'z-?2<HPbI$$,[-)~wn<dTT~;6{g`?XRqyUTDJ-c0Y!7A4w0h{WT#h8cS^S_`I`J%' );
define( 'LOGGED_IN_KEY',    ':sb|A;*fmcUo(*S%I/V_%$oTnZ 7)H#!tC]Mwc,~7;+wq/VTkZIZit$i$8_`74l{' );
define( 'NONCE_KEY',        'wZM2iW]3yPju-:?BqBhS.pBxF0UN|nWrl!C#YX-NOQSuZw{Zu&{eAvOS.;ahkY%k' );
define( 'AUTH_SALT',        'P;U5Ye,YsqLPvT: +^>3P>^#.=]biE8)(=,T.J/ByT6lWKa_]i_2.HJK/-Q_Y9.A' );
define( 'SECURE_AUTH_SALT', 'W2y{;xGeC@(a_b_kNX^+MjSW6buyOuLqv#`8IS0$4K C I`d)d6ir$J19,fp#>*,' );
define( 'LOGGED_IN_SALT',   'Eu)h~NS?R2::Fp*9m-FToNZjBw|_UedCP_y?|1{MrTsxW@gn}DC*BsQeHYX>WV<<' );
define( 'NONCE_SALT',       'mYrPa JgIL?C#j[e;gD&>8mfdlrF4)&TKkrUWnjFykg*jBS_/flITzw03FAPvU)M' );

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
