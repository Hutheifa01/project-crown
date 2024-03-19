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
define( 'DB_NAME', 'crown' );

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
define( 'AUTH_KEY',         'HS[bM1Hd->TK!R3=jC6&]*g Cs!]mxz#K0_:eW@Y2I2k<#rO1>MA5nbp FkF,:ix' );
define( 'SECURE_AUTH_KEY',  'DbfB)&m]w=79?cCp,-ZTT!Ny %_CzRTBqZg%2ZkW42at8bAP&(Cu%vLC?QW*x.Yc' );
define( 'LOGGED_IN_KEY',    'As]Zh- V3G4Bj7xa*O%#Dy+hN+^~8m^x+,{0sarsvk:-L}P3|DW1&|e/M9G$86*6' );
define( 'NONCE_KEY',        'KN-([@F,fCBTIjO9.c#G,o*#7AOgeX1+N>6#)NK|Z3_%^m672i[NrxXwk83>~X(K' );
define( 'AUTH_SALT',        'Y(f%yejJcOYIUu3?L]Hy.^E>^S2<=1M.iZo3GcWtt#Ln#/!t51a`Wtlh`z=NY~7t' );
define( 'SECURE_AUTH_SALT', 'jhvyYefJ9oOujxyynq9of=z(P#.7STuJ?bx<P%9n/[Y@oDk$WdyiAWw*u3P/t<sX' );
define( 'LOGGED_IN_SALT',   ' #,]P2,G|IH:LRB,yP3HQ$r?1bSbL(,~DvjC~]?O~59/A+Wp$=b)@/&0Csw=k2al' );
define( 'NONCE_SALT',       'X@-U !TM!$-VGbqQ!>9k5N&*=MCD7qNKh>Bi9EV(RiJA=|q%tz|)[?aO%Nm&)Ao-' );

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
