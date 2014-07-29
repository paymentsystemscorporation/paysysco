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
define('DB_NAME', 'wp_paysysco');

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
define('AUTH_KEY',         '!?+ktu_HI[b6T0dWz0[+eKV:ql1Gn+q]o?N91&qUKr3lX|*?Zpm1g|JBJBa$h5PE');
define('SECURE_AUTH_KEY',  'h4z;i7+4t<?7rzcF$l~@_yC%5epqVEsc-@O*}>-+H~`2mp,T%v+W,46{vqd/<<Zi');
define('LOGGED_IN_KEY',    'G2m|TgE,[8{>_[EgPY&X0%6++RwS3GQ>:+2-WCLBye/BZF60Z>_K*GvfMNnx;L]_');
define('NONCE_KEY',        'jXs|nnO-TMeNbVStgdBO4-mqz|gi*Vq;<W7$/R+E+X}Io-;>`c~+I}8o2z.+QwGz');
define('AUTH_SALT',        '^:=+a-:%#]_H+`}=9(4!a EaeijQzKs2MxxlyQ]-!Jr*lN{;a7@:pd4m~ky!zW$f');
define('SECURE_AUTH_SALT', '&hnMdifrL!C~bvrofq/`1_Wy< 6&62FFII~eg{yNaN(C.(L]XMk/yi.Vjgf:9H-8');
define('LOGGED_IN_SALT',   '6lSUdMOg(uTe3%:Do){a5<M;;tS#^ODc7OGF+GwwI3&]nR[Nef-t^I eCmd|6w.;');
define('NONCE_SALT',       'kH+3^k_,kE=.J5bunBZP<Ol/wA(_3tY;AkeYIsP<5VyP_;m,McYCH[!/,e&=4GvN');

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
