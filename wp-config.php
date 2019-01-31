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
define('DB_NAME', 'wordpress1');

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
define('AUTH_KEY',         '{7D5I,kcp&gl[hYDKi0HS.$_pn#jb2?564&}x6Zf!?^0a#0}ZuS)UCh7^>;KiqIq');
define('SECURE_AUTH_KEY',  'y}3EQMBQcys_Y0P37o/Om`k*39~_NMk@_J.W]+~u@X+DL>QivQhwn$tHcu4<w}%l');
define('LOGGED_IN_KEY',    '7zpkn]6DN4ihgO,`Mm(jxE+EHr([~MfFky-z`*ZM!}iKfVfMMw286FaOLFAlKKJR');
define('NONCE_KEY',        ')igfN;q,|a;ma9dSpf-D(  8t3$_2.*.8K[y%U_zrA,3m&GA3T8U$yc{s~IE9I*)');
define('AUTH_SALT',        'v]0qdFyF%sR2&?6>LY^.K$28A^NK/8dINM$2+9)q80o71JsL,/|#gv]#7X@PDT)U');
define('SECURE_AUTH_SALT', '=/n[ehTv0otuB%y|:Q^ y?T$ATdX@b1-VQ$Ep]GIa7YIXe-b!AoSUwoBx4:>NBL!');
define('LOGGED_IN_SALT',   '!Kl~8JoZU6>_,P}1$}(Up]{_T7Ep6BBG}t^}Op6$(`5a*ra-N1tSaXMT.f6<g<Ec');
define('NONCE_SALT',       '{6zNdkX$<pZDTgHbQ;u7YpGi`%T%D0Un/R]l(VRcs}0AaHqYM?qpTcI9nQ@s%j*J');

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
