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
define('DB_NAME', 'itswork');

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
define('AUTH_KEY',         'X.{R#26f3+(}f7PKPLP=b#*#e08cD<P4id+~(<-u2;~qhz~)}S-z6RgmiSj.Z*gq');
define('SECURE_AUTH_KEY',  'Ms-JK^Al.GVN^fUmrZePC>cP|&t7LfCV.(.Ba:)^wql:@W}FzA#iW`sM+$(sXr~j');
define('LOGGED_IN_KEY',    'WfOqjyf%uN!/buOqu.EpR.zE9t^!]/6W8hX.&`qf]5mdIwG`/wV-pM><hMigBV8L');
define('NONCE_KEY',        'H-x49VtD<0mZbobq^]R?0x2g!Ex#}8-H`JrLowd-F05HDuKZ[l[H}lM>N7`#rvfk');
define('AUTH_SALT',        '+/ ~PxzC!:m9%?C5$eT4T;rLi0~#K{GZuYT/&.<0kmX]YIw;WZs8+u~R(J<EyI2A');
define('SECURE_AUTH_SALT', '}#U9u4[%>h9fz]gzYv;2J+7BJq!.b)E=:gZ9V[AQIr f!dNvqxT<MDckIy^h-Zg5');
define('LOGGED_IN_SALT',   ']WzWu.V5k[z_WB_5@R}3zAi1RwWrf#360<fS`l [(CwlPNq%G{f2pL@b4ReUioQ]');
define('NONCE_SALT',       ']9$K9B_nBM-EoYn@e;F9PB<_glSP#`<EH` B`-~JzTl71z>Ob**2JZAMe|w`-#N=');

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
