<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'veralon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i;OaxE0xIL:N/]Og-lTClkYJ.]H&sO6Hc$lfC2[%UDRMr}gjP@b^aNx*C:3l6{e_' );
define( 'SECURE_AUTH_KEY',  '>8.07cGez(5t|U8*?<nz&A=~lE^=$r;mL#~Tz(8W&g]j&7@eL/R9Enj!e>`#@z~|' );
define( 'LOGGED_IN_KEY',    '}kFMupI8l(]95I3.Y,|1&q2a)idWGN}W9+)=HG#zw$;[T%7qd_n&2cob@zb},n.3' );
define( 'NONCE_KEY',        '5XHt>_e9HIJ3fY>h_F<[^b#b};1|S*KVb$MN$WaJi:TJ%Yf>#,46K}l/9Cd)d<_Y' );
define( 'AUTH_SALT',        '8s7S0Z.h8Ane.]^u}Z)^a!a_3>mj|NAe6vj. <mM<)Z^gou5z{THq4z8*kX}nqGj' );
define( 'SECURE_AUTH_SALT', ' V^|hrb<wJj-}W}%||U&7Xqz(vUjJ=s6Hzmu3W3 nL%O)t6kRTW0P,sH<s~C-B6_' );
define( 'LOGGED_IN_SALT',   '.__1L7b3+}QhDVQhaq*` p7/)t.ajkmRQw4K2=``ll#IEehC/QSqbrP87:PQ</C@' );
define( 'NONCE_SALT',       '~8{e/`J%kT#E>xjeY8=Mv}Y+j=J{OpkMYd{Xm2pXU7SxMj8>c($YZmtR5tQn <$=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
