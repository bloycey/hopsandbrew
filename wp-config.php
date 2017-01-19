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
define('DB_NAME', 'hopsandbDBd2xu7');

/** MySQL database username */
define('DB_USER', 'hopsandbDBd2xu7');

/** MySQL database password */
define('DB_PASSWORD', 'oURgdXJGAP');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '*A<;*PaD,zNVBFN4grYYjQ@>vv^n7F>}7,UcJMUBnyffrY,$^nyE{7ZGS~lw-do9');
define('SECURE_AUTH_KEY',  'Sp+~l5H]r$f7,<3^MXEEQ7jubbmT^{y$iqA<32*{XEPT6IubmmTe{x.|rzJ08B,0');
define('LOGGED_IN_KEY',    '<u^Q7EI{6jQbbIP*myyfq6E{;+.TAI[v@N4CFN4kRYYkR@>vz!n4F>}7^RcFJU7nv');
define('NONCE_KEY',        '~s~S8C[doVZGR!os@k4!:0@NZGJ4CwcgNY>v+_tD];9#WDPWDtalpW#1~_tDO59#a');
define('AUTH_SALT',        'nb{y,K19pSdhKV#s-~lsC|15![ZGOR8GwdkoVd:-@[sCK04C[ZgN;6.TaHLTAqxei');
define('SECURE_AUTH_SALT', 'rjQ^{uy.q7Is~k5![:-!R8GJ08oVggNZ|s@!kvG}08|VcJRUBrzgkrY>4@DP5ita');
define('LOGGED_IN_SALT',   'bPAu*mub;+.;+L2lVh5!|:-O4CG:dkRZGN@kwzc08|[4!RZJJ0BoVgkR!}zaHS*lx');
define('NONCE_SALT',       '$6{fMXbIy.qubmA+LXEH;AubeLX<ux.qA<2YFozk4!,0@N4BJ0grYYjQ^^n7,$>');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
