<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define( 'DB_NAME', 'interlignes' );

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
define( 'AUTH_KEY',         'jX4m rHA=22D[aN1lcqut#5/yzvYw%&&ffNG|gH>MzNF#(xYr:a/ YB30nDP``R#' );
define( 'SECURE_AUTH_KEY',  'I{5%+ks4U5Gfzq0MDR!`e=]sF[wO,Y+[qCP:;0zz&O5p~l6,1XJ}FZ`M-O~GCJ#v' );
define( 'LOGGED_IN_KEY',    'G]c0irz*6W0<|,Cq|EL;z*rhBz(|*iK~dU)M%]d3=;P`Y9IyUqTZ9KFSu.9Q0%TE' );
define( 'NONCE_KEY',        'wdXPAilh{Py6):E$oH/&vxZ$vh4.@4WQ/)~R2fK&iJ{VI f +ww^CbtCnZ7t%suD' );
define( 'AUTH_SALT',        'b)c gRK-|97l0zd=}&YsK](9e@[Dm{I3?:e Ce#WMK7@~__vuQ:j*_>hF*0la$^c' );
define( 'SECURE_AUTH_SALT', '=t<=kP2l!R!R}Ma.0!|pu36t6W-:Jk?Wa#(^.2@z.[)X:KQ#^tAs)uW`~}Ee@LRK' );
define( 'LOGGED_IN_SALT',   'upM9@8ytXqwmI(YlKu5H2?sv`^#}Ww}[BrO[K>s]rUgb)EO,qg|k!Q,|7MKS%krq' );
define( 'NONCE_SALT',       'XK1Vdvq@IQZcW&*m^rJu>s_~+YfzQmOMA@h|JH`y.iFY0@h+j3LjCxPV5au!Rg9a' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define ('WP_ALLOW_REPAIR', true);