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
define( 'DB_NAME', 'greenplanet' );

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
define( 'AUTH_KEY',         '2~.?|!::X!b0:$^:N3RqRo=yg&EJY2s/)O#OKKh,P2Qez &3y,zQjtvs]q63lg1P' );
define( 'SECURE_AUTH_KEY',  'eH/;7b7R#+-,k[L]Ioo#n{/{Cd^|*dKnKj(!3$,x^EJ@fW]$/yHv;@,b<1xc?%-L' );
define( 'LOGGED_IN_KEY',    '+{!}v9XSv0v$?3soq;%U}`jxHOV:rD&Wp7G4#}tvj}HfhyULsb)(_cvSxmsn`;Qq' );
define( 'NONCE_KEY',        '$C[;p*u4NU~:Iy9e_K8lwwDQh{)3axG2v)@dX?Gn@=|VDb2Pd>zao|LBXQ GQgLp' );
define( 'AUTH_SALT',        'fWLI6s7i>ol:-#>L@(BEE,qV46%7z1::jpP[Sc[.2K7%bl<v~&6T9#!!i13D9_AI' );
define( 'SECURE_AUTH_SALT', 'T#tGz!yfIwt!K[m>QGp_)2p0fu Q}7[kb88mw v]c/:9.*ttUd2b/,Jdhd4</wbN' );
define( 'LOGGED_IN_SALT',   '%Ed%_PL`Q ,h;2>aUUJrtT~q|Mbz|9fm@P/S/YB^]BAd//l^aFjNoCPoeoL`A*vl' );
define( 'NONCE_SALT',       '#jgBrm~Dgw<-{u^DP7>&)>KiW^?f:O[(]kx#?J#Nt&.(*xvBAn5zW#^+S_0.bhJz' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
