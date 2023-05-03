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
define( 'DB_NAME', 'wpdb' );

/** Database username */
define( 'DB_USER', 'aceygram' );

/** Database password */
define( 'DB_PASSWORD', '$1995$Ace' );

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
define( 'AUTH_KEY',         '^y)8;Q)wsbQslBHj6LL$}3P|#IcczA~Zg1 !2QVg&[f<RD+:@3g&_kA?JsKCh}*t' );
define( 'SECURE_AUTH_KEY',  'R2u,7Y<E>oHYA;Bq(+A)?F~_&7|rj:aEY).iIb?S<:c1^[rnSElveL@%NKuTa4.p' );
define( 'LOGGED_IN_KEY',    '[G]]3iY,8{ jb-$`.[jbxZ*wAK,0>C,}gq@}U#QN]-%d9%@`tc5#tu>txr35ZNev' );
define( 'NONCE_KEY',        '-J+Q[*ZAc^d;[-,na%WxYDa4Bu@^Ng,jrs5+NjB{V{WcF?i~${[f,IP~]mmPxRjF' );
define( 'AUTH_SALT',        'p`bE`z?T_Z6Kuu3b?~,S&GNpvo&wzQ-xtgzfoJg#uz<SEl7rir8Q;8loJIS0tO/<' );
define( 'SECURE_AUTH_SALT', '6(sUWt5}^HZo,Hr!wdE`C;gwleUa+Zmm^ 2T[WLP2xA@A{ z/IWR*[:`wf12G~Y!' );
define( 'LOGGED_IN_SALT',   '$Yf*F5.y/x)l+1Ch,}8w?7uFjzDy?d1K<Dz.BRUBL=mYho9j`x}k~6U.SPd]<4CN' );
define( 'NONCE_SALT',       'lXw*[z>pYL__[{$l9T6qr[5;8Ivde0.S?83J[@A3r]`*>)|/._01fu;TN<og6J9~' );

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
