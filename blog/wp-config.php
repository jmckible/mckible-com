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
define('DB_NAME', 'mckible_wordpress');

/** MySQL database username */
define('DB_USER', 'mckible');

/** MySQL database password */
define('DB_PASSWORD', 'kl2QNJTE');

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
define('AUTH_KEY',         'WjA:uL4dR GS7z|ty9w>|B|!BU8gK&:,br#v+ FO<NQVt+:X5xHDG5a,SY8h[$-P');
define('SECURE_AUTH_KEY',  'baf>8+rRkG}@|M*T~CZ3}wVfBPr<`aNW+VVRW|[Gq?z2uy~7NmfNLN-m*!=Pu(vZ');
define('LOGGED_IN_KEY',    '+{AG|a0ivpUl%XnXb~raTk&0$kIP@n&,8[W/t/BcLH*[FmgfoapI);>d-:%c#HL*');
define('NONCE_KEY',        '+OHNt1ye]>{9={|Vu{aDOq%c:W=C5m~@iVc4<X 59d&9ZT@j[fv{%Hx{b8_HIM[z');
define('AUTH_SALT',        '-zxx[nxOu*!a#e(F7U?y?+.CHo,Pc|T-c#?Ml3Y8{._U3Ca[L)xB>~:0G!.IKbvW');
define('SECURE_AUTH_SALT', '5f]]DM[FRHZSbZ*m[uiH(2_N)0~V5N`FS$p:ED[hs&Dd!I|$tv+ya+apys)0?voG');
define('LOGGED_IN_SALT',   'V1hYO#$#}:,M@h1ory]Bs#[|Xw(i/Mx:Cq;p83H+9ZO_py1;*H#4+,*Ysw;A7Le{');
define('NONCE_SALT',       'YeRjDg@&P4htewEd|JV$`gQ>a?Y0m|%_OtlrH%|g{BSUQ9I`vn?VG%Y-?CXuPY3W');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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


