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
define('DB_NAME', 'atour');

/** MySQL database username */
define('DB_USER', 'atour');

/** MySQL database password */
define('DB_PASSWORD', 'atour123*');

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
define('AUTH_KEY',         '+`jT-9,./jcNCKyfc|I--K1yA<r8kk|dTzmb8AYf#_ ^N!0k}])BMX8|8+< =Rg.');
define('SECURE_AUTH_KEY',  '!+x2%*+`W}.4ms{y*47=M7QO?u1Ws-hv+x^=lh7+0Dn8edV*7ACVwF@0lt.c^VIK');
define('LOGGED_IN_KEY',    'Hi3zhf2k6|mM-G8>aJs[&%a8i?4H,,iN_S8k3.?WWW-z9#lTSn>oKgH9p7ehHh?z');
define('NONCE_KEY',        'BKT52MDB_Ta` {cTX1+]mT+qBsh)syjg:EDZK|D|U^T*]Af+/|Ej2.t&l?&eC:J.');
define('AUTH_SALT',        '>w)+:,*:-/aAyNblRrO_WGr<34Ii<d>Jt99,<^F:=a:&<{tv|,.rA[t9B2H/rYI-');
define('SECURE_AUTH_SALT', 'PFf[pGF:z1y-mg,h/bA^am{ytD~(lAu>ef(OHju|=0Dy5L0o0XS1}=*dF/qG!Fe{');
define('LOGGED_IN_SALT',   'np`fts{/]vzK}tZMGl7~;vZRVUL#]A4~e+ANKq|<%f.s|q=WNY|hOT}0>s1[i4BF');
define('NONCE_SALT',       'Ug[@<K/ncQ|?l}&r/U|&nrq #C7&>sZg(-[/R[pMM,{l;/JMRGT^rU#zg#-}>m%-');

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
