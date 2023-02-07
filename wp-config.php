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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '@xZ8iImx&:jy^Qvsw2&3.86Sc>j`VL C}pVhuka0Y{m*1Jiz-)w;:dEV5.Ik,8r$' );
define( 'SECURE_AUTH_KEY',  '%!(S[5Kv7OJR`7g*fDvaF{%O$:tc3ws0vQ 8$t{q(cL9fuJ7ZVIl#|eR;={E,EH+' );
define( 'LOGGED_IN_KEY',    '[99M1p3R_fSpQ[3LSdeG.TJ`3acJBX;dIGOzV):i -#~^:+p*lqVShbcLXg5A.iw' );
define( 'NONCE_KEY',        'HGNF-vL#~,>raBkwz$=>`%j2|xh&HxGG[(Uj* mw`#sD_8SoIY/_v-VeBUG;&P(0' );
define( 'AUTH_SALT',        'FJ[w5:r~#*La.s-t9d>[ECexH}jBX89Y39`?hq0Bs},osEX1=MT{7rNtSEhq#*}9' );
define( 'SECURE_AUTH_SALT', 'Yd~jZ(PQ]XdP1oA);272}&zfi<UU%;eV{#9=.~R;Cj*RBbvAb59R9ug9y*L,X&+E' );
define( 'LOGGED_IN_SALT',   '@Y7gPHc>O[s.FK2x~:f%di7ong%4Cl6A%@;y,$s4hII2h$LFJ>959WC#.3&/&P#>' );
define( 'NONCE_SALT',       'Llwr|hA*=~=uZwV5qM63tQjr 2S~.(if8 M!?&A>ihjn$+1e6=vFnPy/>WibBHYT' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_999';

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
