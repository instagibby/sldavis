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
define('DB_NAME', 'sldavis7_ei');

/** MySQL database username */
define('DB_USER', 'sldavis7_ei');

/** MySQL database password */
define('DB_PASSWORD', '7tdjg3c2');

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
define('AUTH_KEY',         'PiuXtxRXl^.?Ux<B091TJh98%*lTKjHi30MB?0nJrB-[,Z+Hds`+B7_ZZqJNGn#r');
define('SECURE_AUTH_KEY',  'mXoZ5)R[z4>d3Rl+`,`D:^w%.xv0.TvhtWhoE9F-`3zgy+7D`n<|0=p?lya -YH-');
define('LOGGED_IN_KEY',    'LZp.b|::&S<S*Etr-+DLLW0/XesC?oEbEJ&Z(HpSc15]3-pASk*1pl+kr:mw}W5L');
define('NONCE_KEY',        'HsaWK(I cwgI*z,r6=h]qV)2&k0b!c]N2,9c5Pxe/hhJ),&xBtX]CpKQBd{}`-<h');
define('AUTH_SALT',        'r_Bj@ZNS8x?eOG;4%>#UT+gc69;uOW@dSBh.a+=p7mfm=_oZTY1vR.]-86~wdYa3');
define('SECURE_AUTH_SALT', 'a9c#[Tl6A=DA^psq7ws!p-j6 WK[@fnc,gheY1siPA]w3 PW~,Bk0;;l/l })w<;');
define('LOGGED_IN_SALT',   'B)b(2y1*+-55tdJr>RNf-@r%G>RH0;GT+,QL$g|V5JOuZTnD#(cVLPEOE`0ee-Cl');
define('NONCE_SALT',       '6:B N-)RejJ*}RMxnCzVKkjo?={D,*m;NwX/K^En0/Kr6zwJzyIb]qe x,^jFS9J');

/**#@-*/ 
define('WP_AUTO_UPDATE_CORE', true );


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
