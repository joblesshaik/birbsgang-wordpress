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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ' Q^P#/T-ZT)hiVpm|S/VR]y+-N?fs~+>8GJub2zttZgJLQLBn[1EK*@Xs&]SqB<y' );
define( 'SECURE_AUTH_KEY',  'R/U;z~)Qq;xl_^7a3m?E;dH f{2[%zB]=?F2EEjlkdGjj:]XfG/A;Wr?2I7nI~f ' );
define( 'LOGGED_IN_KEY',    'bq}2YC*b{Mri2R5b_/hp`lq(:dI_E ?e+_Tn5B~_GKyqV`U=m7DXN+Lis_ W&4{i' );
define( 'NONCE_KEY',        '%tv)e-/rBbj|?xU-A)ga6g2X4W=4dzk;x`3nJ$Cj<v5]3qkzc[2]u= q&I$ECcY?' );
define( 'AUTH_SALT',        '_L.RzV!?;xl$rs F!2F5$P,*pun5a:sCyKO !2%])>Oe).chSr|*M}8&HtM9Wt{e' );
define( 'SECURE_AUTH_SALT', 'u36spa70HY^5Phg2tEF-8bB,d|7=,+w~c*S2J4!=z{8PG6L-.bF/liEXqI26-Dn&' );
define( 'LOGGED_IN_SALT',   '$GS+U`eTr*}rcEp&1.|{Xi&v{P!mxw_JhzeP.f8z(*PRj,cJAI^th8,rPQ9v;D6K' );
define( 'NONCE_SALT',       'X[cRIcly;/N{03@8,9;C2%3|t-)@-_fycT]`J}KE[_dkP/:&Wg /tamZ-um6E[DY' );

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
