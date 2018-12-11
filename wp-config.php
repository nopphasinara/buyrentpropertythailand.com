<?php

ini_set('max_execution_time', 0);
ini_set('max_input_time', -1);
ini_set('memory_limit', '1000M');
ini_set('post_max_size', '96M');
ini_set('upload_max_filesize', '80M');

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
define('DB_NAME', 'buyrentp_live');

/** MySQL database username */
define('DB_USER', 'buyrentp_admin');

/** MySQL database password */
define('DB_PASSWORD', 'L&Gd.(lwKDP7');

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
define('AUTH_KEY',         '!m{*s2!FNRw?/e;glh]&[Z9IW4c2+;4=Er&9MR?R6@%S+<]-+|hCPmN{5~qM3/@M');
define('SECURE_AUTH_KEY',  'eeX-xUHHOHps?!~%buE|K.v>Y`.e)9?O&?p|-&i=xreZ1$GFMIGo;kI2ws2Ur[va');
define('LOGGED_IN_KEY',    ';to!J>ws) ?5VusZo0RPUHQ-WVt/-M.OJdf^|)uB*Nz Jflm&}gIT2.N&-a(DE3{');
define('NONCE_KEY',        'kF1lLX3L[4|F4)O*?Cn9y3qv)pk>Dc+qsG@{JG/;PPn]/U#y>7I) (,fKsiBdasW');
define('AUTH_SALT',        'u8->cZaRTQKLuOzJ 8K|gJYu0)MS5L#!!giza||lMYYL9MyY&4.$230mF+qZY]qJ');
define('SECURE_AUTH_SALT', '|-LbU*B$O{j;Y2(mr@/2X8/(uT[q@~#c|$L26k+7{Svc,_.BVm~C46~1WZ]dsY(4');
define('LOGGED_IN_SALT',   'KVu;jBDM&I|6+.#oxkFv G%5-04+bgV1@c6LemfsX(+hxow$XG;W+m1n^6nsc=$S');
define('NONCE_SALT',       '0w6<~}HFp,6g/cMP{,aBdN+lx8xWgOo k*[r$-|l.F7#V|P)8|:KFTyNZ9-tXVpp');

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
define('WP_CACHE', false);

// define('CONCATENATE_SCRIPTS', false);
define('EMPTY_TRASH_DAYS', 0);
// define('AUTOSAVE_INTERVAL', 9999);
define('IMAGE_EDIT_OVERWRITE', true);
define('AUTOMATIC_UPDATER_DISABLED', true);
// define('DISABLE_WP_CRON', true);

define('WP_MEMORY_LIMIT', '1000M');
define('WP_MAX_MEMORY_LIMIT', '1000M');
define('WP_POST_REVISIONS', false);
// define('WP_MAIL_INTERVAL', 86400);

$protocol = (isset($_SERVER['HTTPS']) && !empty($_SERVER['HTTPS'])) ? 'https' : 'http';
define('PROTOCOL', $protocol);

define('HOST', $_SERVER['HTTP_HOST']);

$host_suffix = '';
// if (stripos(HOST, '.local') !== false) $host_suffix = '';

define('WP_SITEURL', PROTOCOL . '://' . HOST . $host_suffix);
define('WP_HOME', PROTOCOL . '://' . HOST . $host_suffix);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
