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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'POf!0#S.jZ,5H7;|P|J4`r*4wa=|.QICKYOAo77k22&#ndgEfFi&uB#:dWg35^j4');
define('SECURE_AUTH_KEY',  '@C>qeo%PR!LGSJ5_|z;1/|[!O0;|N2ZiizdHJvDn,K{0dGjd?q3FKh?[p,_iQmk+');
define('LOGGED_IN_KEY',    'bY]a6jE[3ad!mx(!n]%~j[u;{rT=rvg(=6z+gZRyNw5+I,I#HBNo<0Wg5|el_6NE');
define('NONCE_KEY',        '!7zBpwY [wX#If[QRR/{;g)7-!M]fE<T6~@K$!oj?xHjJEEyd<zRp#QXsCp@l-S0');
define('AUTH_SALT',        '-g~BwmV)wyZK@p*ul&LnGjjFBmn%hF~y ?8E)aazs C)daJv;U@2.2B5,]wwb%n ');
define('SECURE_AUTH_SALT', '?Uj%3-QOY> 8nZ0P<v=7akk;ZV+[RxhFw-$Ysl&idS14^7J%vhjr+$o 9SGe`^TG');
define('LOGGED_IN_SALT',   'PaGb60tF5B|_QhJE80~a2}ik^UX^)qS>@9Qbh<;|9~;MnG==jZl9~98D9E+%(&)?');
define('NONCE_SALT',       '69UPs**dd?m`zP2LD4UGOLoh>T^<B2#?B<FSIh(C. S7beL9rJT#_-r5ecHw$l^`');

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
