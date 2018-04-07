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
define('AUTH_KEY',         'v2kPV%+h&5]L/BO3Q0[ev7dT[%>f-@68QdZf/L)T3<@Kn2=t(FC8v^[NQKAsuE6%');
define('SECURE_AUTH_KEY',  'Lxi1 qa:xzV;j_<t*@|OW}S[x^7IDF{B u~}8^OYe&Y[|0e+)/;./HK8k^DC3`kj');
define('LOGGED_IN_KEY',    '.BK-$)9PGL&/i=,~ua_#~%hU_e*4hp*b?rtSSs*T~>X|j(]X9* !PXDR@#]^JW_w');
define('NONCE_KEY',        'b,K+vgVbKLrJn+ZS^v$F5Cp>NSac*oOq/52i+f%NA)0lR@#3G{fhTJM&Zr$p rmO');
define('AUTH_SALT',        'VE0Fggw$NZE*&a.`Mw`ow&~Tg2HZY*tFoH)s-,]~CAC4cmi`ZW-9.qsR{#LRd%q4');
define('SECURE_AUTH_SALT', '.@$=w4Oh)iZ&Zm5BWyl.{Woo3AP#/&zX9W2L=4s)Nu9=a}wpZ$<hJ.APHMsav/Os');
define('LOGGED_IN_SALT',   '$?%@1^p;v/}{yOsv2~Uu;Gr6xYHdkIu;SRCZlJE8.fGY>D}TYe0#76?UJx5YgV}L');
define('NONCE_SALT',       'bhHOp9};oHJnVZ%%ty8TUM?k~<`1Q!UXJqa}-V}NAUksY~q<w371+WLlxfzq4;6,');

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
