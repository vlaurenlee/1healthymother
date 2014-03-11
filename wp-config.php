<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'X}BVFRowMO|a|Y(%@]AL{KQ4^llc|GHPHKg0pC>)12t$r|UilYOk]BrgfU62Z?t/');
define('SECURE_AUTH_KEY',  'iov:EV~qlas)eLi<4S-DY9,hL2*f3a+1)-sUER;/-|La&KzjjQ^B>^6zmo$pia@k');
define('LOGGED_IN_KEY',    'Hov|(w~@hZ_>P|(-%5@AxMG-(!+SvA0]uUl#nS[q^Kh.mBpS`{sv-6<]v-t}E-up');
define('NONCE_KEY',        '-f=:D!Z4E0NMF&bLY^0&^7-q04~G64L-.<1*5]01| `kfK+8|PJ|!]#ek%F,S=?-');
define('AUTH_SALT',        'I6jN.pGZ-3tD{KE5 Q|PyQ{rDK,@m`[Qkk?x4QU3`FNJ&R{K7t))|$#s$ps0_K:V');
define('SECURE_AUTH_SALT', '>$X.;o^M^oXOhC$|Q-L4b4vb=?Z/}eaERRwn{Qlgw0kPE{[6du Y5?W:ajn[%.-D');
define('LOGGED_IN_SALT',   ']l7+a=Wjqw{i6%81hW^*]VW3+9OQ53BQ3>AaT=mvJ|0]:()2zx{K!W|/JG+Dr?4A');
define('NONCE_SALT',       '7~N9*T~n(mk&MdfA+ROg$ber0Ds=$ZdcYn|#9n5sTX.td3J^FC0N31ab@|XL|%R-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
