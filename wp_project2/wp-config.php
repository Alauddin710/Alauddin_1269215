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
define( 'AUTH_KEY',         'zO^ Xy)S6CB7k$a,t?%@c<;>g?6[&6_~;s^g,8 COi5qG*^VN<GdhWymrG@#D[O7' );
define( 'SECURE_AUTH_KEY',  'QN0A7}Iv Fw|#OHD>D8|Ec*]J*U%X[+(2cIwCT.Bvi>_s}F(-ew?LD/vUw8vmR>u' );
define( 'LOGGED_IN_KEY',    'sf]h~JevP%qd}I`~%LJ/BNixwx TPbC5/djAd?K8~L+D.V5v&$wQ$X}A22GY~L6V' );
define( 'NONCE_KEY',        '2#Z-T3-<egRX7l&|k^vI6ZGvVz@:=d/s*Zdr^9nvo;/-(-;>-w9Uywc&n?4(a@.;' );
define( 'AUTH_SALT',        '>wc~5{z6/kJI|+JH(L=Ihn|PAO[GRe[@0?LpF>cA%L%OC7b!P{mL_*&AB4}i~*|K' );
define( 'SECURE_AUTH_SALT', '_TM>:QwEvwQwGuv6_ZX6T~!0-ID~{.*OgH!6SDr%(Ju]4~w>6S>#Q6JCV_K7&i? ' );
define( 'LOGGED_IN_SALT',   '+PA5~nQB6n|((FBct%]#DFg.K$LSgc=/Nq[vua&HHkS]^kX (RWCAkFH+5CP8@16' );
define( 'NONCE_SALT',       '5dync<x7-2s)AKRWLYvVDV8zX3a)NxG/Y@dr1d^IEj=%<o2O.N,GsW%@4v>WD9H7' );

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
