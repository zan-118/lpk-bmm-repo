<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u415731489_wTglD' );

/** Database username */
define( 'DB_USER', 'u415731489_SJgCa' );

/** Database password */
define( 'DB_PASSWORD', '0LuBALoInI' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '@>P;Y#86zJ]O{!K*ow:Bz) `WB!%g,e|-M[z%+a1 !p |zuV_<> nIDhp$=hyXk$' );
define( 'SECURE_AUTH_KEY',   '_r_UA5<Q.gP<a_u!]RMKc@~1~F>n)x8ydxfTJlJh3z>n4sp0XD8o +(Mg?T25R-d' );
define( 'LOGGED_IN_KEY',     'UHQu9wy+MpbUJ2ioC.:3b gnvjV=XQ$t:4a4epfpDYbo[C9{N5pVSP]gDC)v<B,;' );
define( 'NONCE_KEY',         '7?.y46eeOu|_u9`EO >[^yW<{O]Q1)f(me^_Y:#pIn7B}__{C`ef$e6s;i:Vd!wK' );
define( 'AUTH_SALT',         '^kJhDiHJ)pr+6GA?lY>U(2$G5T]14[lmBcRlxQCv]nLA_]c6nXtK?O }qe)w.um[' );
define( 'SECURE_AUTH_SALT',  '=OMJ6k3f2IuE@&Z(`<?$g,2f10h@e!}l{gdI=&t%pTm:*/87&,IdDJ[74=;}ewc7' );
define( 'LOGGED_IN_SALT',    '3PU`Je:uGf$>}z*y>N>DZKBy#@}-LFQB4jIL{19efi|EnCL=%s2Q_(?2_Sbv`cR_' );
define( 'NONCE_SALT',        ']NY2i$ct#vG6:W^BoUMrKHYf=e;Zf_3(U=fr#=#qwq7^_?m.Ruc#Ww62co6KOcnM' );
define( 'WP_CACHE_KEY_SALT', 'rj]./BM,UNnBIbGmZ 8>3XFon2)r&%sz7Q!sX`VyY}AVn!s89Pkx4ol4w3!8v#R5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
