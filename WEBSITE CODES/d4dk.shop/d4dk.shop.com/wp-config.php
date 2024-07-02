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
define('DB_NAME', 'd4dk_shop_1');

/** MySQL database username */
define('DB_USER', 'd4dkshop1');

/** MySQL database password */
define('DB_PASSWORD', 'PfU8ZqB-');

/** MySQL hostname */
define('DB_HOST', 'mysql.d4dk.shop');

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
define('AUTH_KEY',         ':zE//;J+nK1ZWFK%Wz/H&/GNtBYiY5bd716qX`/LE9QdoJQPqdm!(A_+Qlt;50lP');
define('SECURE_AUTH_KEY',  '?Q^cu%WwE4YOwqA3+J|L$Tle0LM3$SY3uk2a9+l4g+Yq9ujlmR&_4@?+yyz;n|2%');
define('LOGGED_IN_KEY',    'BiwG*vgK$iJ~_D6J(5LV1uU8u"8e5h!$VHjd~DF#Ni!DX4U8WO`HF2lPp:qnhR/^');
define('NONCE_KEY',        'b~qlm~$MmD0c&$br7EhVUhv)m0km2hSt^Gdwm0dp@Il|&^zf6uue|DSz55/|9~`B');
define('AUTH_SALT',        'sWCLyzQ?k&(X~B6(&27Q^:%;O:8O2A_/gfsd9Gkfz1yCKo;i:wpfxBI#6q"4v~$C');
define('SECURE_AUTH_SALT', '$P`tgE/1:Rw2Eew`Rd2IL#+M$6Z8HI$RF0nAcsZDrG~C(`Mw4nrLVy~^;%17R7F"');
define('LOGGED_IN_SALT',   'NBYD$fJ+kn#9hj(KOJ_jtK^n66iDx6?!;l%2"*(xUT1Eklt#!jww%RoPT+yzYd0I');
define('NONCE_SALT',       'xx#^$BN5_WqSFBR;j:H)60?B:QajHfRm_"o#7A34r`Q:fdE"p:OsogAo:w6QY@Ra');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_mu428j_';

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

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (isset($_SERVER['HTTP_HOST']) && preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
        define('JETPACK_STAGING_MODE', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
