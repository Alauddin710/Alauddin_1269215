<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp_1269215');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bE[RrqF/;l )UzmfzNn$;S2s`(.;>0SP]9>>@UuIEO(.9tg_BY>=+C-1*$Du`xGP');
define('SECURE_AUTH_KEY',  'VV:q-YVLDIC;m{D,)saUP}we>JR:ThG(zJGl=`X.*cH[HJfBMw10`lsL{]w&Uz{+');
define('LOGGED_IN_KEY',    ')JNcB D??wIUmUWi:g8H.T@71)8$1AP$y!M}rixOcM$?PJ6&lsb./MX`2wkmEoM9');
define('NONCE_KEY',        ')vFR~u10Pn-Nq-I^M3umC/p6CPF0/:8mkTWY))FCz0UyoyoS2&3Uv) ]x.ywHse3');
define('AUTH_SALT',        '~{L0|h`qD)-Td.3s3,I={@OsbiHFs}ZZ54ekP6:TRkYjSzy5cO69JeN!d7( !,4r');
define('SECURE_AUTH_SALT', 'V/fQ4xdI-z!qKE?P{,_!_1YzJt>cFrmO=icakN9FbFRttS*@l5P]R8Sr+h(RY|K ');
define('LOGGED_IN_SALT',   'AtKDavH3$8iKQnvspjZkt!V=Hq@&]7v^x piyW~)qhB!<P0#t9.%)vbwB#Ha>#j!');
define('NONCE_SALT',       '7c+L(+v_aG0ke2L/8!il?s>zSna:_s^Rq2;3}W:m6n5DvJrd{5C1 *1MCJ= cx$~');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
