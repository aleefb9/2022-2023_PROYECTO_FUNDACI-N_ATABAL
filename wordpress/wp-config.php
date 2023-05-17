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
ini_set('memory_limit', '256M');


define( 'DB_NAME', 'user2daw_BD2-18' );

/** Database username */
define( 'DB_USER', 'user2daw_18' );

/** Database password */
define( 'DB_PASSWORD', '3qYED~*]0ZQ7' );

/** Database hostname */
define( 'DB_HOST', '2daw.esvirgua.com' );

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
define( 'AUTH_KEY',         'M(VJQ*s2vDi++ro^Ts<%mbNa|SDAM3o-/,J+GgG+ATy u([k2wk5md6bCarjTR(.' );
define( 'SECURE_AUTH_KEY',  'w`L)Ub_8,zKAS>Ly&|JaEoq)>)x`asO6aZ*#?~W?f8sNxxE-_,T&FDge(@Rl`BiQ' );
define( 'LOGGED_IN_KEY',    'X=Awy^jeMY).j?m<Z1izBeetIm8qgS6?4V}SK{?K`/rL]&|90[:R[IPgCfZZ7-5l' );
define( 'NONCE_KEY',        'm%.;Nx)khrM):sw#J{m~(t,CwA$y9/}Y#_]@+V{s`Vd?F/uxSkP;j;ylVYPo6$a-' );
define( 'AUTH_SALT',        '67mIu@Y*M)M,Pc3dJ;`mDS:3j@bKM{`:OZfo$D&>!)Sj$Hr|*7xz8T@q~}bbsqGE' );
define( 'SECURE_AUTH_SALT', 'FE%D~l4}1m$4,%VS7*<Xfm F4d?VxZeMoUB2MhmNbb>}CH r8`]WeTcn7cUJA;tM' );
define( 'LOGGED_IN_SALT',   'r5]O~-(;{1[Sz3*BSY~0Ck](4VmXsN:&Ni^ZH>BX22l_um.qHcee}$6{Ty?mCSLC' );
define( 'NONCE_SALT',       'sUh:und]`v?#bR#D}yQA;y@/IvjALs#&*YA<,gT*I;TCf(CqG]:v$hwp[jhsxBy+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'FA_';

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
