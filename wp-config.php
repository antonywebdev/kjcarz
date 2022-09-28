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
define( 'DB_NAME', 'kjcars' );

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
define( 'AUTH_KEY',         'g{wy&<Va=uNyvXe]jj`6k@+.F|,H{^F,T_7hvjlW!pQM.P-{ QuJ Fbw26H+?!MH' );
define( 'SECURE_AUTH_KEY',  'RD?X~wseXa.;w-7l;;M2g%L$9oMN%5XfUy-w[fCr&+l!=Xmhk-3cUzY0L[a07,2x' );
define( 'LOGGED_IN_KEY',    'q?A9+(VV)#|=p<w tQ?r&32BI{Kc!w#bQa:fy~c;>(J );9cQV}e^ vY>IoO*!cQ' );
define( 'NONCE_KEY',        'Ls.o,3[s`%<NOdgC)y@owN.GZkT^[/NAfdp/@38a?;N>M+6.o25j*WI~BJ<cz+>%' );
define( 'AUTH_SALT',        ':9ND6e,RyD9alTAS4{g(,XZ)=ik[|:>#J!nKMZ+{~_<V1Wt;Swv;mcxp@DF>mwZ:' );
define( 'SECURE_AUTH_SALT', 'F)1r4M7){zg^5SKwe-NA.h1Ck{Wd[XQXM>YlNAh-~rg9u|K ELL`M^dea8Gt>? ?' );
define( 'LOGGED_IN_SALT',   'ikl)$3(8v7QToY^];Uk>}J{J-bi}=]:H,QNz~3-Wd-8NeD9t+}5GB[rCO9Lu;X[w' );
define( 'NONCE_SALT',       'V/|QYQurcM{*>5;y[^~O!Z>{OEZ[Ie)WAiHj,[Pp]ru3YCzc~U`kLLZXd&[YAR8O' );

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
