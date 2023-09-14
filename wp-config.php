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
define( 'DB_NAME', 'akademilagi' );

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
define( 'AUTH_KEY',         'bl9dQ~7N*5^AIWZD1DS*WyKTeZHhv3O]`N|q !y?JbPG&{5=5mS@`VrM]Zk<s{nK' );
define( 'SECURE_AUTH_KEY',  'G/i?[tt2xOel1_Z0(b{2ku]7%WrghGKLODg VYK)q:*&%yZ;=|{&:cl;vK2I5nx7' );
define( 'LOGGED_IN_KEY',    '/x=(.J]q2B3K5Z9m+{]x.{31f-nAtBa=-2VG:)SR}+DH8Kz&,lGiv`rlMbr^ze|=' );
define( 'NONCE_KEY',        '0a&?Yby_DTIq>^z*}_&^*klOXc5n3>~E<ow)=,Z5I1$:7etNC`MMoKS-}}~^4>,v' );
define( 'AUTH_SALT',        'vZIMzF&BI_|x:7n&e)r5&]yRAB&Mtm!QJ;J4ff.?i5o{VQ5O[0/$CUy/oauQR:y#' );
define( 'SECURE_AUTH_SALT', '(D~;zcNl6=[gf%mSjH]<dMKVwG:9.8MGhe(J.1m_[L/1;%X4{*As$L9Ehs)L3YS&' );
define( 'LOGGED_IN_SALT',   'yhPQgs|Z6nMS5*yd*T0Ovfh)0{}! IW!28/Y:~iVs$23$/:{3GW4/VbrTN,rIL`r' );
define( 'NONCE_SALT',       'Z`ImI{*8l@%52&j2DMLc$*Cs7~Gl5PPYFfC0ok8(~#U=;Z>(r3ZYI~;P#c1i)#o,' );

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
