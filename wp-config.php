<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'apexid_wp');
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
define('AUTH_KEY',         'r/2`-@Zv1B+m<ir|RE:=ZBLudkHrf47`%R1PD-%>(/_3W-. <UA40[/i_Jq_w|i9');
define('SECURE_AUTH_KEY',  'XG^-|b980I|l,fN5n_d:IXV?0|~#BF&ng$2QNkg-ecBvPgsPOL/-6KZnp&LBRaH7');
define('LOGGED_IN_KEY',    'Bw@pWh%pA69!>=+;w{{FqJdM7beb#_vlmrMBa3hs%2JPrieTx7 ,.n08>[?8i9,#');
define('NONCE_KEY',        't/6WtIu@WO&SR%+pO8KNONUJTDyAzlWt*?]A|GjDib2[p0%?9*mf{10b3d(*V-;w');
define('AUTH_SALT',        'b(|gV03:J&HH(<hyEm`kV=G}x=N,z5x!ps:E!^EiAo@).Eg-gYMGi_-=qj?|2&4V');
define('SECURE_AUTH_SALT', 'e:uHi+FT:R^ATHqR_DdewCC7fhMJAV.UVN`n^?kg]:6t|uUmDUvQ50)DJn5(>-0.');
define('LOGGED_IN_SALT',   '%4H?tYc/phD3lZ*B^HyZ:HB2 ]E,B2y|7E@gY91M(oYjNJB6+CMY<5W]F|f-/HMA');
define('NONCE_SALT',       '0e-Vz<S&P]4H!eAe(n^w m:+f|/6Nm>Ld`j930Qyj#/[Qy&W-+8>Lk3OA+0r{z4,');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'fcs_';
/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

define('SCRIPT_DEBUG', true);

// ENABLE SSL
define('FORCE_SSL_ADMIN', false);
// in some setups HTTP_X_FORWARDED_PROTO might contain 
// a comma-separated list e.g. http,https
// so check for https existence
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
       $_SERVER['HTTPS']='on';

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


