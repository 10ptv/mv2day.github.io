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
define( 'DB_NAME', 'mv2day.github.io' );

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
define( 'AUTH_KEY',         'S};3ERg{)= qfcq@Jt3]uO.kj6Sc<#j0LCR$PGsGN]Nisl2Z+7@v;p%g<P[`!$Vl' );
define( 'SECURE_AUTH_KEY',  'c)jRM<XuzZN*,.1;1L8ZFDS,?G@6xz{34J,Xq>g{TrM LWH:)<w`u}C+vmG<(j3U' );
define( 'LOGGED_IN_KEY',    '^jM=I@`$EFrJy5mWa}=O`5fI#O2ehvPc{?OA/=q~#0@]T02S:n;ORX;IjzEQm5|z' );
define( 'NONCE_KEY',        '>NW{TNU;T@.~b75<i/L:g,@(<XUP+Fkz{!Yl|g^OT#QN3i}T0{.[ 6lj<C%,K79?' );
define( 'AUTH_SALT',        'VXWdK 3n,#{GL:J`k]e/DncX{>muX]~*H4ry+=;|fpkt^=M,a_I5P>Htu|5N,jCG' );
define( 'SECURE_AUTH_SALT', 'T[~hl:LZcw75{oC n~g(rfU!8bleCRiKvE6uJn}iP8WIYN2LE 6f?BO /G}OnH?t' );
define( 'LOGGED_IN_SALT',   '4tQC)]P3f]H1.AN*tO<56h!ExuC~Dbkb6=Xb/)Owl62ui]Ug}N1Q ty=]=8X6pFg' );
define( 'NONCE_SALT',       'LBog95*a_9mD(nC+`cUWFH3JTa~!{Qv;/[Ed/zz_(ysF>NV`AXUJX7,Pu4iqZB>1' );

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
