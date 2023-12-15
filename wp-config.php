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
define( 'AUTH_KEY',         'lxNGe+0bWS3N|>29Q+WiLz#{e[`=B~DHmJe_{Wb;oz*}g2JtX@qfyI3*:u`AZgue' );
define( 'SECURE_AUTH_KEY',  '1n;?q=&!HSZ4H$4fTCoJJunw3X&aCo+DV)v]No{Th$/jsb3t@nNSHdZ+T6k}xH9U' );
define( 'LOGGED_IN_KEY',    'R^)jOOeWY6%VH}C*z_~[OY8hLMC~F4b@t*`BwiIAUt`Tbp8n}:rG,+cj95SWTlGT' );
define( 'NONCE_KEY',        '&o}:z^~_ Vv@vgxrK0y)%xq]%8+33@sD>+<d@@Ci-5Q`|}&{8I]#:qspkvK_Kh<X' );
define( 'AUTH_SALT',        '/G2c06c#|S!VwK%d&xTCPLM(pRiOK)~Mg:VGYr1X@H`bmze]=eZsp9Wf)b~:->Bx' );
define( 'SECURE_AUTH_SALT', 'H&z!D-yE}!UN bJFC`OKR[.*d>&FCesI/6,MfSwH.(,rXQ>NOHT)_JEI<za2QT^r' );
define( 'LOGGED_IN_SALT',   '>3FV!/,iHxnW)VDb0v`DAH!_,.$jES`VUV_YR,U2M$)@X`Y,G8-qD:+er!i<Ps*4' );
define( 'NONCE_SALT',       'm@TOpKP=dA)E0dHwW87!Y5SpjCcY%>O XAZ-G@NzJHK6/2u0hee?_{>I+{ia=47`' );

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
