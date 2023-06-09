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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'healthsitebakery' );

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
define( 'AUTH_KEY',         'oX)qgB)x7K#vQ!]f_+n5^d.zs9f22Fpq!J]8;5#y$U.]IE d>4LqC9qV/cDkZ^Z;' );
define( 'SECURE_AUTH_KEY',  '{ll5iX9e8(H0% 2*P[CxpBJv]Q~Y}}{q(R3xdY-RK&rx6{V^L:Lpkj>YAd|pm@!6' );
define( 'LOGGED_IN_KEY',    '#?BCDI)iu7Se.1(2$4qqN,)pH~zo5p_k$,#Ue&Otcj9Gi$GkwtU_&/KS!+hE0dwI' );
define( 'NONCE_KEY',        '_H|AGHd$CT?fWTlx^jcc]xp87ZM)M4=n =~$#W`7wD]ib?(7)X{9e+u*`QZ,{XlV' );
define( 'AUTH_SALT',        'bPw>jvkVuCn99e}+qorMDb5I$Kvp{&K$,V:)zq{sSrp,ex_G=L]Hczq.ZB}XffW)' );
define( 'SECURE_AUTH_SALT', '{<laN?Bx:c@xF-`+o5Q7*y@K}*vH;P!jeMv4@>@>wbb!)9<c^R&FpfFjpqY{1cqP' );
define( 'LOGGED_IN_SALT',   '+65w~%J6%Ylzl1_YsL6}GK;Qt;cg==cJ RISr*s;Bg#oU.@ftodyy|T/MEL;`e)Y' );
define( 'NONCE_SALT',       'ah_B-].nTK){(LILoA44)i76.x@T?}VEnD|&aIsU!J8/bm$l2phzTzIbn/.SKW,h' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
