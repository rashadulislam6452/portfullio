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
define( 'DB_NAME', 'rabby' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '.0)Dag{>EtEw_Yl{8Ock>McPB3loWDvVlaJK6pZ37asApbV]=*;bV5up&b$Is}?_' );
define( 'SECURE_AUTH_KEY',  '1IH`qSiqTT9z9W5<}EjAr  8-5gZEW]^img;+3WR7X?O^yIXNt:PLA<.]y@N#J1y' );
define( 'LOGGED_IN_KEY',    'S?[SKt,0$,,:6V+8_]1x*f8?OTbJj;y=kB7N$Fgm5vQM1do2X0Ru<S7bhTG#65g.' );
define( 'NONCE_KEY',        '13C2$3q9qONTkf7 |od9&al};I,F}$./xd5_c%Y>:ibH`YpM0QAP->F#mVf4gC3>' );
define( 'AUTH_SALT',        '1y39RG+)*`W>*{]q;X+x^ZNi_`HPT(pIqqErm:~Cs;wnRVt$*sh%-nVL8_~N5U7~' );
define( 'SECURE_AUTH_SALT', 'cbvq82x|,J:>sqf^j88[si#bwk1%)+9Q}Xzd;g-h7+G-.LYT/8z(G8$]yQ#Xrue@' );
define( 'LOGGED_IN_SALT',   '{}p<Gxc}Qc]xHKR69B)}t|rXQz2pLNrPd5 RE$W9Ec|PW0c^<tO%8~O,g5#?YpZf' );
define( 'NONCE_SALT',       'eST2=W7}nIkWP]bw9b+y-DqyyO]9 Z]VhEl2w%zrFD6i|*spEBlKF2XMFi9}re+G' );

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
