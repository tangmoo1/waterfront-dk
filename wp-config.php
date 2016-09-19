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
define('DB_NAME', 'waterfront');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'qwerty');

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
define('AUTH_KEY',         '()1|NJ0Cg<;fOzf/I4A>1-_~|r9i/u-R]Gos]_MNn{O-+DiZbkK:cIyVQtq*U_3Y');
define('SECURE_AUTH_KEY',  'u-aO:5]>bqboe(0ZpjxK2tOQ/,x<Ld(Hn072seRma$Zqv)S*58GA+9x]rU2,H X#');
define('LOGGED_IN_KEY',    'PrfOQD:M{3I:!~%TAiHI|3`Wi^qXpBHbp.zLvCOb hnLm?m+g0=Jw m<w=@TFr?a');
define('NONCE_KEY',        'txAZ#kd)%3|.1ceU)5<nmaX_/f%P*C|=|A|K<GymMr<8U;N]Tbj.1m56+$;BbIax');
define('AUTH_SALT',        '3_;7f.9d%!/3K9g9Cyn;I6Tmw5G1ut1:k3eH9rF k>Y)NF/y>b)5_Q*z$7-In~,O');
define('SECURE_AUTH_SALT', 'Nosd!-V|/InDmLRH`+_gK[RhV_P>S5C^2JQ4l[,Ko_-!YvLQ}GZ!R Cl1O0&shXj');
define('LOGGED_IN_SALT',   'j7P|V/NTDQdTwQ<6$xJPjc.nqo-SsE]$PDhsh|Iv|PT[srR~_ulx~a )..2Nj:9%');
define('NONCE_SALT',       ',fUve2-U~ysJ3lY?fMB-F N<<+I;}AQIy7D=WO%O/]?ri?j_CEwTZsLF&/TZWHtQ');

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
