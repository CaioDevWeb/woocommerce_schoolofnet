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
define('DB_NAME', 'woo_commerce');

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
define('AUTH_KEY',         't&%)y~Q]NR:}=|-})R4jQPt[Kxb{F5B!lH!Zx%4(U;?$6}-8T.Zo[u4^;B+%9pep');
define('SECURE_AUTH_KEY',  'o/fwLR5^Y}yD9M6Bu>8s)nV?jVA<}Ferg5XK,`KSE9t%g?QB1v`S|(L|{nj1!{p?');
define('LOGGED_IN_KEY',    '5Mn3Th5iEe*8-3SXhK#jfD~pSbyuH:d.LMP3T6=67p{wxw{we4NHh_mj6l!uJO@!');
define('NONCE_KEY',        'gf%>YIiy1V{pLV@2uMQ9]<8p1g7f^xn,!6+@j:6FijF>@y)q]6|tqg5-)9YvSnX4');
define('AUTH_SALT',        'sU&LT=pF#dHyJ%rv>}!N4]n)$k?30}/jMi!9WX*Q4L99uIs-Q@>~2%RVR-lp:e@f');
define('SECURE_AUTH_SALT', 'o04 sDin2$*G<9BcRT79>yk?wLhHsd]0ZXN:#k>ttIn>-$G=CWk*ahp/NyxL_XTk');
define('LOGGED_IN_SALT',   'uq1fWdBLUO(l#*T%Tbu1<MWWv8~hHnA=#]cR7hu_j[5)RMyOS8k8~d<-[Im#]VN-');
define('NONCE_SALT',       'c,#FJIwQ]kal+N|o#d_-{l%$<E/ZC4&;F`Pw!(>ZOjk[Y>#OA{[~9G7,<4vKQsOW');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'woocommerce_';

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
