<?php
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shanto' );

/** Database username */
define( 'DB_USER', 'Amirul_Islam' );

/** Database password */
define( 'DB_PASSWORD', 'WT%5qzk!bp/?i35' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ENs,HiC.7@{FX4YMa^TCX/Qb=wlK&atm|q*zl166^;#geW|,K+?dZ)&1*?F#ev6*' );
define( 'SECURE_AUTH_KEY',  'x9f;QnYujh>1>cs>E~ 9ldA6,Wuj_Mr5I,[vVBqp7mk^44Ra3VX:}ta&{#pzswE{' );
define( 'LOGGED_IN_KEY',    'qTMu|}(kZXPXCk1L_jisAU I&6#w}.`U+tTlK%awH~_eitPEZGXJ!:pb@;ER%rKC' );
define( 'NONCE_KEY',        'HZ`R0dwn#AU1R%m}oIKow{cBKgJ4;;sh1X+e44ohgj0{o2Dmr4}75YUIsB3#)xsI' );
define( 'AUTH_SALT',        'b[FrXNn@?zH1&V)Zc]m<fuZObA$[CoE.Vvf|6*WWc)Lgi)ZXB5T]m%$(#T]9jaaP' );
define( 'SECURE_AUTH_SALT', 'F^ t$}hdB+o:~$W-TxrJAzM(KJ6A+Q#bm0WZcPe&Xul5d )d,>v)YD}Dglb?CBsc' );
define( 'LOGGED_IN_SALT',   '[$)TZxd?O&-H)9jY3nnO%p4ggL`(np.D]An4ONbK4FgL[9j12BxhN2R):09x8o_$' );
define( 'NONCE_SALT',       'cs1EB>Tj%%S(.qjVI{YaOY[ X&d._1b:-5-S.fy_@-][%iE>t|EIDT$ADh26[: #' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'mi_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
