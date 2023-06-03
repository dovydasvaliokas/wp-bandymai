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
define( 'DB_NAME', 'autokova' );

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
define( 'AUTH_KEY',         'Ac`WbIYTBM,5jqZ 0`xSTJbS{Ob)dkKv5iz2XKb1l=Li4Q9Q:S{XYxf1>/wc{.O=' );
define( 'SECURE_AUTH_KEY',  '3O6&+!_.%4(ptB.?jia4S>?QpN9XKZ%]HKI9WVtPN{mu2Er16DHow]]T|/|U`pb8' );
define( 'LOGGED_IN_KEY',    '*pI5T+/xIE>`|Icb-<#i}w!L+6nO>yIV4x9^b}(E>q 3MAJ<(/e1FAiet}6J8M3@' );
define( 'NONCE_KEY',        'UKN(ukwirt~ymn/:Gah|Sp|e;6mK?HNh8.*aN-%d;2Q8r8Y=XK[&`}R}t}l8BZ6,' );
define( 'AUTH_SALT',        'WHAE->]g+(w16AJ?X,&E6Dc#NEJtA=VNlbupES/p?qzLVv?%jh~SsMV5Se-5wl]L' );
define( 'SECURE_AUTH_SALT', '+%P#CV?5 k$U~/dWNeZzj@BT;qtNE{sS>d!Rm&PqVbT{YW7eG?P:cN%Xt;9Sk1Y2' );
define( 'LOGGED_IN_SALT',   'i8)qA^E`z`TA*bkD.l?CO2N2H}uR7}?d56.][f24g1^Qs`GW|2;c]N/6Pl1&:T^y' );
define( 'NONCE_SALT',       't^oq14>!jQXsb=`o5;-eUs/)YoMMxP*HD`{`[Fg.2iT,X^|$:ObqzFF&jLXtb52:' );

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
