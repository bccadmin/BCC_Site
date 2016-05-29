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
define('DB_NAME', 'wampwp');

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
define('AUTH_KEY',         'Ae|(;a6dt.2bn^OO?)7io-[E+@(F2 ;F#o~E1Wn:B#^5.^aSh?DAG1$@:8C|8uGT');
define('SECURE_AUTH_KEY',  ',{.T:dE%vyv>|t?ubdfsp<l8-Kn?!Jlb4fmwn^uM$CP/T-Wa1UQG&T}6F(fZ:^%c');
define('LOGGED_IN_KEY',    'rCGHN5}b|D1.V(oD)i&%co+C=71G$)YgNVI.h$lU@*e]y=1*~7Ft3i*`HY,ZGd2L');
define('NONCE_KEY',        '#;hvC$ONveRv LEdrqO1]{h. wO{&e`>)zrY8s}?;wad-4Ba*4br3w{|}e{-`Q(n');
define('AUTH_SALT',        '0-~?2.,a;22E6 L)4@g^B!o$kh:`aU_U<l$cYLpgTL/Ywb`Q^}E7J}!cl&_X%6qC');
define('SECURE_AUTH_SALT', 'tF?A*iIv9=A?VmJ>G^S|DLsq$9Hus%8VkeC&RX19ZPtWkyrY+K#CeQ]^1bL3k%`M');
define('LOGGED_IN_SALT',   '~_ZDu!gpm7z9&aOgI/r*xyBBlNp.5$jFEuD[t!<$xx](9%{1flim8iO{wJh]JnZE');
define('NONCE_SALT',       'oW?7MC>#3t;/M^mC<8.I]Fk{v72`s>}fg11g;v/;r@2S1A135d?2[jbkLg>4:VJ!');

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
