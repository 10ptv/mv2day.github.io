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
define( 'AUTH_KEY',         '4H,h23 jxz2|O])J d.bh@)4lGj{AfUD=}I{<G1X`_(clc3&WF#2HK>]vODjc_SX' );
define( 'SECURE_AUTH_KEY',  'l!(EC4b(PXZSyEGR4)i&!;lU0E(5}2T>BCM[HLm=`@HtZ];Dop$`/kzV>,#np0LL' );
define( 'LOGGED_IN_KEY',    'n>Vubj-j51-]k6a2xk~A.Wbticykh^.Vqar;k[ym}nfI5=P?[!V)PG?p.B:%[(xB' );
define( 'NONCE_KEY',        'j)t&H`r=d 6}1(u[F3__T62|];g<x<J?6?)n#v`fTJGA!9s-RW;=D* yN7qA`j1_' );
define( 'AUTH_SALT',        '.1+Z}*TgvK@YJ5LTrl894.K*Z&:e@3|rYS0q@{KC3N0L2-GSj)7/:q.blF1W</A+' );
define( 'SECURE_AUTH_SALT', 'd2S|>3H )He:1*[fsayV:b+kVa/B^W SqP}U^^a@{%~@xcilHlGTacKq-)UL24:#' );
define( 'LOGGED_IN_SALT',   'P>0j4hm6&=&N^4ovr* /cr=Mtz9,G3IjvVL2Bem.QY<a.&s[:<DqQP}|7rz0.&L2' );
define( 'NONCE_SALT',       'NV]H$YkB6C/2@Jb3?&{j4F490}6Bm@U16_(y~q`%Qu7+f{:)oUbWZrNU15hgi~4<' );

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
