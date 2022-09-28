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
define( 'DB_NAME', 'wp_project2' );

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
define( 'AUTH_KEY',         'zI%==v7T#3hwX2y[,{dCfl?aR7(=Q=bQ(eiE|PIV{Lzd0R=&DJ%W9+siT[ycd0fn' );
define( 'SECURE_AUTH_KEY',  'MjfY:20*T:*Ss+)RO/np1ujt@-E)cP^edJnM`X3d/8(ofzP<mkTDjsV}w3Vnm$C3' );
define( 'LOGGED_IN_KEY',    ',Gc}zZOP!@r_.&os4I(=r3bb#u+`3]_zhr0%:+}MD*SCcXQ?#$gYk%E =Y.TYM-u' );
define( 'NONCE_KEY',        'TTv? l`N!/R.Oyt{bQJ(`a#_Rsv61piIDDiGUCO;FA$9yf?mD&54bHKJmXiQOmV@' );
define( 'AUTH_SALT',        '/k|B`!:~v6;<&e${!;Af[A[sGGuM+pC5?@!#A`gq%;No@RK8*r;0zPlG}x4HN8Vj' );
define( 'SECURE_AUTH_SALT', '$H@3`qYn`?WmvdkiO|OQyo4N=82gyrsoi>y6^h3P%BnN7;FIzeN5b:&&G1K5W!ds' );
define( 'LOGGED_IN_SALT',   'yGo/oh6gkou%ASu.c9b*1q<cC7;sPtcZ*!.ATLE(q4K%T<9d !ImTG>M&r=V,x6P' );
define( 'NONCE_SALT',       'F1FQb}+_^2j`6|!B#VOfBxCL[8sbuH%q$`CJ7t7>a%&ZJc@*kCqi30.i4|f.ZPMZ' );

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
