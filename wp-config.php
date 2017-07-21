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
define('DB_NAME', 'site1');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'exxMRVfHwH$:sfB o6+b>G(a*(lpoSwf(Z./M1|*ty;;z1{kO+ut$Sc:nWxp>t`$');
define('SECURE_AUTH_KEY',  'zgsC/+AAzryM7 i3}Pf8rW:`0[|C}B@cnj]Jjp%<_:eu{6Li=NCM2=R7mvSA?aWG');
define('LOGGED_IN_KEY',    'FB/Q#0rkKc5w2Xu!aWZT7:=H;&UXn-|RG${-hwn9k>wVO:p!q]AxE~ihBG6[qbUw');
define('NONCE_KEY',        '`igW-|wZ|+W(}9J7ZXW3d,Te~ih6`6+-z|}|M=bRN7A+(Er^Qa+fy@`<}Ff[TW?n');
define('AUTH_SALT',        '-h2}m$3Z]IG)u<QW=$+_T?i$[xfuF-~}i;+KCrO- _<VCOU(.*3H9ok2.#L8{Lz`');
define('SECURE_AUTH_SALT', 'J5*_cAi51r5wbH3Y1>So5}+/|x9Vqn#8z+]j[?PNc/W4,m$->C]+8+0s$T?zv3xL');
define('LOGGED_IN_SALT',   'n^:/G3SBX;U*y|YrQ^s<*mc[<[r|*B^vxPQ6Nk4~VWy}&m4HQB%0&F0;ua?]cqYd');
define('NONCE_SALT',       '}E|0HER2J9kUm._!S5w=<C$zg[AU?}:.df]Ghi&8EN-B^-NLi@6Zzi+Ce&v}q%9r');

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
