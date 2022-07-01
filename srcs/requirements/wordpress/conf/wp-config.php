<?php
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'bteak' );

/** Database password */
define( 'DB_PASSWORD', 'bteak' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

//saults
define('AUTH_KEY',         '1^00i:mHm[Y7Q1cIF/M`$|>G%KPHl68:U>(BY~1OD^IDyW z-QT;OY373|_ea|+k');
define('SECURE_AUTH_KEY',  'X*nI{!z7!aS^/S>7`^16wlmuvIL|c(RpBPfP-h~/F3O5od$ FbTER}QaG:*kRg2B');
define('LOGGED_IN_KEY',    'JXJxzG-0Uz,bZ|Z{s~JSYF-amSk*z&+NjOfQo!F(r=tks6L@R{7#svc-N9/ri9 I');
define('NONCE_KEY',        'w,K?qI;Xr0g*Lc6WIU<a_3V)pT|E1mpqr0LBi/xRA2&gq@}20w):Kgn, vc]!+Iy');
define('AUTH_SALT',        'F^CuH1ZJ$6n/3g+bK=9RCl{*i+c+sUJ|[gb|DZIygKubX&Ml>C?M--ieun}wh5n]');
define('SECURE_AUTH_SALT', '7S;TeeKD 3o^/W<P5b|p+)Sa J_&sN?>kp4y%VtFo?@v~v-.Q32:<dcj:Epaqb-$');
define('LOGGED_IN_SALT',   ' @!`+GKkS*%r&^FZ*E-RU[i<0!e=L5q% |gPY&S-6iiZh{e>/aeR9(HH%2c-.;aV');
define('NONCE_SALT',       '|:u2r-(R5-!|z7BIzP+0{nP0/{}.4-vrT-qk?KG6wh&.BHtX&beI6nSFBNwD1]?P');

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