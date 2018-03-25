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
define('DB_NAME', 'unitybees');

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
define('AUTH_KEY',         'jzG>g;Ydb`MaT98oT G7pi4P@[E$}sEtU_0%[9`m((tDky({nGq6QizpW7&FO-4{');
define('SECURE_AUTH_KEY',  '(:x9r$xARj;fu-AA/u @y]6D/;IN^W!<sAe 9Q@E<JDXqy@dgv`k$lhx#<}a#kJx');
define('LOGGED_IN_KEY',    '~0Zg/5/5%t7nW[]?/R[x-1nMX@DFjPIq}_7]I.57d:bd]!)[I9ox=UFg-OFvbt_k');
define('NONCE_KEY',        '(,MmW/t,m*8&bYB g!0.X&FtMx1}S,?E.vS{i){f6X{a&.,r F #K<=)!JQ(f*e3');
define('AUTH_SALT',        'xNCafiI{/_{yg/9BRgH;00i(qUPQ.`Z%!mg>X7+_RkM/ ;~!F2]1Ot/Mk8E45zkI');
define('SECURE_AUTH_SALT', 'i{|$Bx%n+3kV{(wdPi]DawMI7`yV%B7;?ziJ##es3YVpH<26%A:(mO2<u2>`C(Il');
define('LOGGED_IN_SALT',   '<cLok| Z:p]5KB,uSpnf}|/>k.Ed]t!4MWF.WdSM6U>oZvvTw^~q2pb$[/n?Y18P');
define('NONCE_SALT',       'LcA$#)Hop|CJMziIlr.9vb4k6 3Oca@-P#,8{m6Sy>CVWM[;k;=tDes+rn}@?vZD');

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
