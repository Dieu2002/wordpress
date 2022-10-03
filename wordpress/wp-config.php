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
define( 'DB_NAME', 'learnwp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '0b,zzG|g$Z?=M,0~0&@z}g;ucN/_@E<]g2&:`X+J`h*&3RL=.);vSC9;^)}KN=Zp' );
define( 'SECURE_AUTH_KEY',  'C6LH,OuCm*kU|/#vr;(<^Iw,pU-Q,1mR]{vnB+{1UhEuj1HqZ#?}&[AB{T+*!hg9' );
define( 'LOGGED_IN_KEY',    'UF[<b7NdMRT:B$UXS]npdl!l<:$wdL`0ze!Qp1Lh$M,>JjH/+%Uwo2;cDs%yt8[U' );
define( 'NONCE_KEY',        'Tk4O)C*?}Cy06e/~@J)/yB6%z#4z7pQDDlUKspE^T,?dVG4?89JRN+&*8.,9(Zn#' );
define( 'AUTH_SALT',        'l&),ncJPiVi{DH9C [KZ&{]S`pgfP_pz56]9lVe7T2Xs~gMwG0LYZ_j{E&FNohRY' );
define( 'SECURE_AUTH_SALT', 'kCSrE738N&fX0B#ih+q38EeqZIOs[cKVE~F8adL-Qr&l0-^oPCOwCkGR^PXQtpg1' );
define( 'LOGGED_IN_SALT',   'qM-4iZ:Ml~KUgRhG*m/`Dt/-5E;KW)RbW6HW[/C<Y^O4d[w;EHdU(noqb>LebM8j' );
define( 'NONCE_SALT',       '`i%$HmR4#H1dw3DG2GHVY>N4S2_fIT{Wz7T#C3)DHJ/R=L:YO12Vsm%V=oFg:c]Y' );

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


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );