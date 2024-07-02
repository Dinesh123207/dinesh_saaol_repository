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
define('DB_NAME', 'd4dk_shop');

/** MySQL database username */
define('DB_USER', 'd4dkshop');

/** MySQL database password */
define('DB_PASSWORD', 'VD^2a5GN');

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
define('AUTH_KEY',         '6%rk`@6?3$oH)cF_f4!Smzb;8#wz(k?b@/(rC1^mf3?GeFZ~n"v~F7m|zy?5Srz@');
define('SECURE_AUTH_KEY',  'D5Kdy5!eDU%;ENtjF%Tk0JP2Gy&NZj"_EmLw@q%~;:)BK%svtIaNO_#^g(Kya0xf');
define('LOGGED_IN_KEY',    'LCPvp6BsAT?@B&QE`qLZAj@&jHnP%IFNsb3^xXx5c0+%kkE!5A7gX@ovu?^xx+@2');
define('NONCE_KEY',        't&zc~h9Y4f1N?JYFEpi*8$QG&)sz#3GRHSfxYuRgB:)orqJga/"D"n"WfG:YU3hP');
define('AUTH_SALT',        ';AbG15|ENpI3#Agj0TF?aWg#zLC4@+2P2&MZBfDuamjRL_pzp|bVwz#3zCfL^wP|');
define('SECURE_AUTH_SALT', 'lw2^t;DKnYV$x28gtQf|Ws#(&B$La9XXod&^n1ypOm4b+6BMK;4n^M(~B5KukS&#');
define('LOGGED_IN_SALT',   'KSOenqd;^lFxmBlBy%P#^2&GBJfV_1fTJ?fsx^2@qXb`zq64J"qjHbOIilEAPjyj');
define('NONCE_SALT',       '+cu4mnN$11B%hFDNAovt`/r%G9opQZAm&"9qy7c9Hq9Y)Q2WvmV`Y:`3f;Y"!jw/');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_3z8zx9_';

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
