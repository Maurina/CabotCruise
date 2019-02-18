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
define('DB_NAME', 'maurinad_CCDB');

/** MySQL database username */
define('DB_USER', 'maurinad_ccwUSR');

/** MySQL database password */
define('DB_PASSWORD', '3wiXaPb]xz(I');

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
define('AUTH_KEY',         '%D8Xps{mt^d*A=b%_x<2}%hNq 4f 3L5tUJn?D2Oze4YwpH2x1Vkia$KfdLOP_Al');
define('SECURE_AUTH_KEY',  '@J5Wj]9&K=_`,jsb$-LXaM@Dk$EUACC!rA]7;/6]hqjIC$.po|cbktiC0|tS<0!v');
define('LOGGED_IN_KEY',    '0k(PRkrNIw1%)C>rH]6N;UDJ#P}dzfKqq%mlUAe+tLFq?XC;]5.{DWg@P+UVbBj:');
define('NONCE_KEY',        '5KZz@]RxOoE.L[NU$W1Nat:w-($2CM;%.n}sKYL!V52tkNcIn[[doGkNWPW_/C]{');
define('AUTH_SALT',        '&zUCAnl92%*@?vp_%QD%7p:O1V1g~@-|G=d{Ij_2d%]~ibjrnF=S{;=%2OO_$1Wb');
define('SECURE_AUTH_SALT', '-}E^Akt[jyz.:l9<qcH#v$9O-qn[S#uQ.NUjfL>N*Wiu9!uECd:%rpkB+%*-?;CF');
define('LOGGED_IN_SALT',   'RF730b/9n;j{>&/DsP@)1]#5_NKfk!Y`-T3h%%/n>vkNsa9=:;m2m[V!<[X+%w/&');
define('NONCE_SALT',       'JbC4oa+z-&~748WERqx`y7MC~nkdSqbVq.iy7OkIxM}i*V{*r/^QR?;N0O,U5ImB');

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
