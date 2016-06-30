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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'Evd)eY$wa}8Z$LP32)jn]]%0KWbrCNAB.vrSJA$vsxu6n!*]qP%1j@9ya~hotzG*');
define('SECURE_AUTH_KEY',  'Ctfr<7KKk1E!u}8JyS0@p0H=4/tR.HUT%>!Ag>?<%a]4{p7o(C3,T3bGU2E8m#|!');
define('LOGGED_IN_KEY',    '&D~zj|vvd,`U48lZN}$=?wPkPouaN>i6+o8ovrn1r?%<K$*I~pz>>%Sgd5Ud<XA~');
define('NONCE_KEY',        '!pn%X8,s?ftsfafKp{jn#W~;DIy3~M6#H7u^HRQz&}@as[TrA*}=/q@{RbqgeH7c');
define('AUTH_SALT',        'k=c0$-+15v!=*fI8-|Err,=YCD]!DI;K3w63*)JREvVn).dzs);YO,2&snL%{&u&');
define('SECURE_AUTH_SALT', 'Dtw#dIsTi0ih@<p0/S>f=nxV=)!z5WNCf$gk0PyacECb03iM~q+Lq@w,%a OosnN');
define('LOGGED_IN_SALT',   '_U?nJ,^&Z boVUtm.eS!J]_J2CI{fmvt9W-TmH{${Bt(&_.vS@XJ~Pl`VXZfxa8,');
define('NONCE_SALT',       '~rR-5SF)&~cU]vD(^hGn+F7RYXXkgF{3y$k|xB4^omf^)9eWFp@`<Hw3m!nz#B+L');

/**#@-*/

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
