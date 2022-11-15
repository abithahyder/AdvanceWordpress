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
define( 'AUTH_KEY',         '_BZOa#/oMj^1p5#(CU_+*t$xwK&_h?|11JnVt#ic^lR%,Gy:C0W+8&yX>bY`+=~z' );
define( 'SECURE_AUTH_KEY',  '/U/jY14~mMU#<m-mO=6C9^rAMUakMLukvvo1]Gu3p)_mc5HgqByW/=_^l,x6+!.6' );
define( 'LOGGED_IN_KEY',    'q;e>QPh~mI,eNf`g:b+G~)zjvqbCkpC=ao,ue~+ ]^o>3ic$a&KmgjPB.J(heG3c' );
define( 'NONCE_KEY',        'J`U24?rWEGrd7l6~`RRNlt:.H3[L:lfGP1[N,k3Is0zA}:K4z#`pj796[U80Grk(' );
define( 'AUTH_SALT',        'QaQUn.#69}5!4[4Y+Kn$B@U_bX>D4UL^! =/] k{$?+?4z-gJr;E]n4Lyh,b eq)' );
define( 'SECURE_AUTH_SALT', '4iK/nzR00e}}M<~iA%5q|[QJ~^UtF;fgU3i.-kJUnKxHk9~f2QB+<[^_!zj0HA--' );
define( 'LOGGED_IN_SALT',   '.cvSrIzOg%]Ya1p{+Q~I)1#{)eJT!?*e#86s1%HGQMuI_mxjV9fB;1JDhwH>;ak{' );
define( 'NONCE_SALT',       'QcF2TzO1X.LGk=){w/OBn3Xpqa:]JBFw&pBEZT:7gF5WwcBgvM)%vlV+{irC}gtV' );

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
