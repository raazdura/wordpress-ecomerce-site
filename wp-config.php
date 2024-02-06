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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'gc-}}p,cOGW`qPprOoa|c7MMIcc:*|^KGfy&a>x3}Cxy<u(yu}HTE]Z8fOphE.xW' );
define( 'SECURE_AUTH_KEY',  'knlKIFYQT9`Dau|FM~A.?36H`a?qD?;Z;Gnka&h*?ceHB1f>9DvoDage{.2B~=/A' );
define( 'LOGGED_IN_KEY',    'U=}t%=M.*@~6C1Mb0PDJ1Br_(PkN%o {RmM{n$)r8q}TFxVltOD6y8I}!C{01s{{' );
define( 'NONCE_KEY',        'odXfixa4^VM;tcl6-OCFl:G0|D$,_O[FeJrWM1qa/|IJ#c.}Im)(f;ZZhNVr|J7=' );
define( 'AUTH_SALT',        'A#@jNz^pu|wR`8!u/u~@6Gx@,0m8xQRVN-$@8*hdYuYf&h,I(]!5cyaIUa0*ud|9' );
define( 'SECURE_AUTH_SALT', 'j*(-/knQf[[f?7(QL@?xO1 YkJkovn^10sdBoT+W}73&@/ ITYY_n}u/UN8w>Vu(' );
define( 'LOGGED_IN_SALT',   'FdlQj~EFr;G|C~AU7GU@uWC9|b(@R{B3IN*5]T+JX5yV!Zc=p+UA{|`q&]iPn9oc' );
define( 'NONCE_SALT',       '/6{ytcILq!:&c?b==napi)oCCl6bB[^}uB?ILIiX6CN`=#&b&9;xj4?PBVRz8Ad2' );

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
