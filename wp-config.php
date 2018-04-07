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
define('DB_NAME', 'wp_shiro');

/** MySQL database username */
define('DB_USER', 'wp_shiro');

/** MySQL database password */
define('DB_PASSWORD', 'shirokazuma1022');

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
define('AUTH_KEY',         ' oB6i%4tNIz|W6W.{L?nWPA#>/?XJ]`^_l|&G~{[x=B:G^r84nBVf(P[#|KiRw~g');
define('SECURE_AUTH_KEY',  '5,(yFA+`@E]@|SZ-ZjX<eS<Ns3$N^RgK@,~eZE9D_*g%gG]SZ/]7nS-n)J=xyHR|');
define('LOGGED_IN_KEY',    'p$FB}%JJ=kRJh?RdX{$@O8t1.>nH4eoBHb]S)KL-~sT$|U~hL1gu~&v=v`Z<>oj]');
define('NONCE_KEY',        'L;9~]_;0<peV:kyg^o.V|ztJ0h{Xk.e`@m9Z#6JLKs9j)=pjpZdt5Az<!9cwp~O-');
define('AUTH_SALT',        '6U7g;AfL7$|-u{4Q$l|Vq^lA5&I)ay[5n{A8Edd9VY83NR,.;O3/=_NkCds:^mD(');
define('SECURE_AUTH_SALT', 'Y3I{6, P,.5V}Pwx ^r[WN/RWOOF*a6+5K;4-VNOisR3AbDs?TPBC?6.GA2)hZ!M');
define('LOGGED_IN_SALT',   '-_F%@w%YM89UIdOl O/-7-wg[EhjJu=OxKf2qd$s.*vTkT028ZNGPZYKS&.i?t,@');
define('NONCE_SALT',       '{kuh qK)ZL$^^deS%WT+-8k1PA;jS2Qo^-!Jc^%/|yS)]t92.yCF/?1gF?:*12JH');

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
