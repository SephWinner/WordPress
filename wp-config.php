<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'K9ONDEb#x9!Gj7[ D:$N:^V=gu_P=#ce5h:X_,QB7/)@l*>9~7vacClZ>W-Pe CN' );
define( 'SECURE_AUTH_KEY',  'HY&%lx)`4Dg4k>egd]IYeS8xsv!~qNp)YJH{W,ij/9`LUB&9kh/j7.-# nH)HtS2' );
define( 'LOGGED_IN_KEY',    'je&T[>Xa8#?#A$^<tcpRjsRIBp1*Y-hz+^1h2VCTl(iGkOaLR@ri]&bYV^,OJzva' );
define( 'NONCE_KEY',        '.w0iAgI6{^rU!XMD(jPVDLX]_vgmmK%w,5N6X 1(blePsFdZ@>{RqHguQp3<g|@m' );
define( 'AUTH_SALT',        'kpHVb;=&gmjcAw*DQ8@VKv4tJNi^[r(IlZUEX7vj070%>qgrWVm-6dL`sL62{fS`' );
define( 'SECURE_AUTH_SALT', 'Y=L[oVUg#8!H`(S6rmh-9kj**MyGM3#TagU(bdF:k5 ux-miqRFqS*j2>W7VEV`b' );
define( 'LOGGED_IN_SALT',   'H!&.t]nXQ>93gMI>]~+rg:Qp[9~F^**({?AVm>SVxZA]qcS/m gPsY^5iQYK4|@p' );
define( 'NONCE_SALT',       '_Y*.6?]EOAn^s[cz)Xg0,zt:oX141nQCAd{goISczI9 !no,US)zP%gQ@=u0d7zg' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
