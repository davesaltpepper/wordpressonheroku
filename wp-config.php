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
define('DB_NAME', 'wordpressdummybase');

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
define('AUTH_KEY',         'W-/l0js#*,-=rO8_]yugQ-V3/3~jar{Gcs/Qs..jcw_L+>G;]^-qQrFV8;|40%A*');
define('SECURE_AUTH_KEY',  '8a/lNYkV$=pK)w?UH0<9@ahdgY[-(Cn1mCTyn2KsLfT7j6{c:!#Sr,w`cEM BPC5');
define('LOGGED_IN_KEY',    '34}Pb&=y.}fFg9.|wWxa^l-^%5%&ATcF;Z8*N6p1|y~qB?3W09i:^/^,= $:|JCd');
define('NONCE_KEY',        'b>S6vhS*et}{wu-RgegIZhR{-xhlw,IY Z|.DDwC1JY:.Kk;=:o_HzY;uuYl!/C2');
define('AUTH_SALT',        ' F(oLGl|`;Z5p!!v2U|4VTA>7> M-h-rM||<rdo</7qACS`qKDZ*4(IzF%JH-I/o');
define('SECURE_AUTH_SALT', '|8+?{1fG.n@0=0c}hcv-<pUQ.En5%#*!U{kkd-a[|wgB{Gy8oh_c }[2W0<!`-<u');
define('LOGGED_IN_SALT',   'u*+tv7L!o+HNMDtopn}:!KS/$w^&IXd#f[;k5mg7quF0<pWJ1m.Ka.?}|Ra,b!xD');
define('NONCE_SALT',       '/j? V?8TWWC`NPWC9.|u0I;:l$`4r[cK(N|s<Z1[aG;plU$~2|wTjjn}MIdO{/L}');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
