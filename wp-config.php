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
define( 'DB_NAME', 'bzs_dasup' );

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
define( 'AUTH_KEY',         'gV)tZwtd_p<bU=hai&!ets4[f=0HQ<3A()=#/q]S+754&}e5dF g_(ttr}k72$2Z' );
define( 'SECURE_AUTH_KEY',  'U!:C]Sx_C!ee^SjlRchk86bL.qYQq3&Ib^*!AipuKF8 2NpsCQP0lc*/-M@3,^|R' );
define( 'LOGGED_IN_KEY',    'Dy6walAmkc{QHhsaF-JN5weA?UCk4{49bO[N0sXulI@;7p,{42I_eSjz.;@.2jC8' );
define( 'NONCE_KEY',        '?&sMv =kZBsf$(vmY iS}]o>`DZqpe?-;)*(]8@FI FczzeDoAI=dG3X &M#1X@<' );
define( 'AUTH_SALT',        'wYGYPo|0%K]Dfqo)1)6bVt09K(Ydm;]8Y>*s>26)rbs5Y^|eUQF2D6.<T!%YBhS?' );
define( 'SECURE_AUTH_SALT', ',;[(q?Q{FP#$EUMM+kXEN2!^:,)oY0)I1DdX;[SEX3>Bijvm,;U#p5GfLcApQaq&' );
define( 'LOGGED_IN_SALT',   'YF!Fv*<#bmHW&e#%D4S>]5fR(^Cdug0^]j)fno]xe00;P*>A5&~8I.P;x1=}+FV&' );
define( 'NONCE_SALT',       '#KEYdyJ+JWT2ycEP+NRm4>e&y3[t`T-Bfgu!T]hD]~iVF$O#4C]^G*G>^USG6~<A' );

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
