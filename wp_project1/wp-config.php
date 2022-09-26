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
define('DB_NAME', 'wdpf51_wp_project1');

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
define('AUTH_KEY',         '}?1=|lVJzp#Uo;TT:1J,4!P_!MTLVV,,:C.ACRk&>eXp)iXKrjwhn#sP{ ?q>)v-');
define('SECURE_AUTH_KEY',  'Nt?jD/wF*;zSigGZ/0{0i=$x /Ea`u0A()LCj)V++0xgF<0sP&C<r 6z1){j_Cfr');
define('LOGGED_IN_KEY',    'F&snD@BuLJ*i)Q}fO{z|m[^d{}?nBR`/p<$~!@~PCjfAR(/UuGm%Q6VwSH!|%OP;');
define('NONCE_KEY',        '[[0H;=3.J>A.(}KxXcITo}M=ECNyI]qC?=v^4CpMK&VB+K/4owIoo&`@M0sBEx*7');
define('AUTH_SALT',        ')nDPjSvQw4X2PBZ@cpC_xA]zuAOUzm]YokKEZh|L)|FlImEl4}?Dw/-ZFI| EyM#');
define('SECURE_AUTH_SALT', '*O5uJ()JqE,?h>ZlU@v4c<w2:I@:eHa#^vB(<O8v-*(q*_v}twXsp$wT?!02;m8*');
define('LOGGED_IN_SALT',   '^LjBZojCt(hyt!{*d-V#J6OI6AHV2{nE (vQ1wu-OmLn1?(;-+6.}+,B.w1=%lnw');
define('NONCE_SALT',       ']V9QPn57l,yL21ea*+=Q&0m3oNOWl#VlBzF*|m`&@eS;`&Tg]~JYCdJJfQ_La=[l');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wdpf51_';

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
