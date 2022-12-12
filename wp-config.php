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
define( 'DB_NAME', 'wordpress_test' );

/** Database username */
define( 'DB_USER', 'lucy' );

/** Database password */
define( 'DB_PASSWORD', '@123Root' );

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
define( 'AUTH_KEY',         'LB^xAGF8vb;Uo7QX6 8dv5h[Cp=H2;mU9Z4{cA&[STm&,+?#i=I<CX=KHhCX:y%z' );
define( 'SECURE_AUTH_KEY',  'W{%_ d(&%c|XWlFs-vKJptM rLXlqx^YjT%R8boGAm7}vRU5k{0r6v>2N.r67#r3' );
define( 'LOGGED_IN_KEY',    '1+qe<<5J|&C.W0#F.!=Vi]Vb~C&eut<AbHA~t/}>!@;5da,{bF1q3TwhJaL*FI9.' );
define( 'NONCE_KEY',        '165xz@ES9?U*Er9QFz!=Lv-M i.5jd~d_8Oikqm5W`Vh:<?XCc6<_F)09@-N}<J@' );
define( 'AUTH_SALT',        'Fb#6tzNg%Y TjHMLm_,]BJ3og-fVuA%,.%S9*:P]PlC!$y(x;X4>Q6omjUwK%!X&' );
define( 'SECURE_AUTH_SALT', '9+Iv%.SZ!tFJ}|mbNW*3yTo13]w(0[?)ub}xTix3>i|<p/zg5~UNIiC*=iV%H<jK' );
define( 'LOGGED_IN_SALT',   'H(-,B&V4d#oXuyO#2<*F5]RhiWqa,^:lY*A0]9|pBEIEX:F`q8 hA7lW5d0bri$>' );
define( 'NONCE_SALT',       'aevxJc7>z^H?_KC3&Wi(6$7z=9T1d,  ^lZ?N<OjK{!h*,`}qr3^~HI7PY7Hb[]2' );

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
