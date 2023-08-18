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
define( 'DB_NAME', 'u5315087_wp740' );

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
define( 'AUTH_KEY',         ':9o9bN <~N} !<YK9Vfe ]M3-6=J@m* il#OBkU /HB+E)V1l-a^}LK/uU39(0<Y' );
define( 'SECURE_AUTH_KEY',  '|/x$[!eVLJa<Rb*NeyB;Tv=~JXtLI2{F{ifbOyG]Zx<<9+T67?leIO^6AqeY4az1' );
define( 'LOGGED_IN_KEY',    '?LPj=eLv,pc, ix?673QW)e|fu&D0WjNkD9YHIcT[s`l~0:[j8DyqAUC]y]Hj+s ' );
define( 'NONCE_KEY',        'k/hFa;~TVHFaW=8.nX9%mW~VPk|XT{}0!0>)g]{$ A4P=_a92pzYqaQQ_!NB.FvM' );
define( 'AUTH_SALT',        'y2FUONR;RB`y4),2 @H;k1mjw+G,G7?f)CNB8X z1B6Vn~Pr%Mzn=B.g0Q}K.@qX' );
define( 'SECURE_AUTH_SALT', 'tkK?Oak{u-g-W$7?WOA7{,^4a8aC3JNZ+(Ja{7B~bxZpWn,3zoo0zP=b?oe9AbVp' );
define( 'LOGGED_IN_SALT',   'ka(3_DLdlhZUJ<d~.yPCJQuc5;cpUa#naD~)&CY0OdDMeZZ(1bpUy>lJJ}-jDXk6' );
define( 'NONCE_SALT',       '4si9xe~m7O/-@O?xC_1cekwtsi|3854iWGw/pwn%FHEK[5cqJl:82V%0(-)d$Z>&' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptb_';

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
