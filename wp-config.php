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
define('DB_NAME', 'wp_cranderveldt');

/** MySQL database username */
define('DB_USER', 'cranderveldtcom');

/** MySQL database password */
define('DB_PASSWORD', 'GkehX8Me');

/** MySQL hostname */
define('DB_HOST', 'mysql.cranderveldt.com');

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
define('AUTH_KEY',         'qiK15^M/#KUlog`rG0L&%2uQ;%1S~Qc"AU0$@:+98QLZfwO(qAVf@2RX#dumVUEZ');
define('SECURE_AUTH_KEY',  'mtO%oBet8M)adOx`g_0Y@Z93b?0v1lawvzfC1c#;;`U1CpcrcJUX#t:?8/&|/v/v');
define('LOGGED_IN_KEY',    'zs3~eyngDhPU0ycE`_mK~R%MRg|SxVtbAXOM:v^CU27$?;yOvfCtLg#J85m&Cn;#');
define('NONCE_KEY',        '*IIV~h#q0pUG93zA*h#"EcMcB!;HKdMX*8#r;:~QX#4V_8Mj:fDJ|iFXdG$;%MM|');
define('AUTH_SALT',        'Zd@6wjVb5/4E*L4H#3y3MWPu2h^m1?HULW_fxZg7PFcb%%Mhqy@8/uoRCz:58|2~');
define('SECURE_AUTH_SALT', 'JGs$QjJf/9ztMQ"Jz"|1BE4a4+q8FMXRUIB`51"jh|JDE2$Sz)m?Z7L+zbeh)C68');
define('LOGGED_IN_SALT',   'Fl;(;PiYD)@iwerjFf:ClSz%b+(gDmTdkKPtBY8W#kAQ(eVGIiNMzpiB:O!:|+$W');
define('NONCE_SALT',       'c2t73(;OrfzkS|eH`7K"VAv1/`qOwLm~";`nN$fi^AVLaL^5B&mpgym^/9E0x2f@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_fwsik3_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

