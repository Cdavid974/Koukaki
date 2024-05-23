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
define( 'DB_NAME', 'Koukaki' );

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
define( 'AUTH_KEY',         'yw3;l|ZK2L=l^K`f~QSE<o;J.`og[=?</]7>3rcTYzT}IDr5Ro)L&w?V@/wBk0Zj' );
define( 'SECURE_AUTH_KEY',  '|20ncTrinqev> jPl!l3SDc;{AAnk9X9]a(SCqFcAgsJE`-(:D[ejA_&+Vwp{`Fw' );
define( 'LOGGED_IN_KEY',    'c?f#+MUz{?rcM:a30+6CXDPW]Vg>nxYGX2luLukzFdBrxm~/qWqsXXyg%}xVF/E<' );
define( 'NONCE_KEY',        '<5|2{Fc6o+M~~mi6%-`.uV/):rb%D>N|a]bho%$Qdu4;z(>5kDT6.qlbx;*+tSc5' );
define( 'AUTH_SALT',        '#&)1]vr O;rT8a1oQ,cn:r4p^oSmh{adrC5=eOR4Kw6dHu9Blb?7V$o4>A$~s?.M' );
define( 'SECURE_AUTH_SALT', 'ScF)WUp`N9s=fjebJP<&6XU G$Gn?g,9FLh[wgH(p=hc.{+g|$cXy2{U};A>x5/t' );
define( 'LOGGED_IN_SALT',   '/vw<,l3}`mNfB?B *F; f@uvnGfDJ-1zm9]^}tzE%$^Z7.$Eh_G2kyP!rsKz7O[l' );
define( 'NONCE_SALT',       '(~L_^r~m?@dG0;P4=%Scp*c*}*FQHgPr}_sMT -5a^xr=oKy29P.9mw;N#7>w`PA' );

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
