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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'media_coffee_landing' );

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
define( 'AUTH_KEY',         'Brjl?5~~gH?|prh8|VmRe7.n+*h/{/$K.?4;%Y:)nGtjSt558MPhLw/XQZ-$c[)-' );
define( 'SECURE_AUTH_KEY',  'hI6O%z|Hb:g0nZjE*NL#o}mK;*7%^Gyf4{8Gkuu~^~G4$l:ccb+)Sx:y[ 3&S8d/' );
define( 'LOGGED_IN_KEY',    '*GXCxU?fSx(rG`H2X|R21_H +U(74@ }b+[k.JakWYCSbpVDe4^v,=t~np3DkqJO' );
define( 'NONCE_KEY',        'BABY+1Bl2Ad%YY|^OI6/[fD<O-jb5rzsIy7ay%pzSd|)Kma!z[Vwz,dsnCP.Bk^$' );
define( 'AUTH_SALT',        'IN-QAcT3{2V]7+XH6`~`mK}j<A@{OAz0W}=xr#_g,CD$*h@fm0w6+3KprO$TDy%~' );
define( 'SECURE_AUTH_SALT', '$^)}Ii=)eJ%h<0`83$KE;2enJDcHXWwDB(MT$NWd2v:9|p#mi@&a5@e2k(< ;*fv' );
define( 'LOGGED_IN_SALT',   'DALF |spkB1jSZ$RZSzu-(-0?$&-U3R>Jt7=AC;jao9091Q~I-q(p|okkG960$u;' );
define( 'NONCE_SALT',       'n/Y|Qn~tz`A|[Y&envtw4$j-lQ-j&;)<r1Z{5)]5(qgVc{a5t[f3+*Sl]QqM]Nck' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
