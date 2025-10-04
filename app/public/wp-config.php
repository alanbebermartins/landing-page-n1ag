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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'Iu%/Vc8S@uC7$t|0q>7_etzWmLgVl,B91<&.wF2%U0t0(usaJ:5wY^z*eDvy~7d:' );
define( 'SECURE_AUTH_KEY',   'Fe[`OL)`P<Ivo@A_J4wo;mL96./ E`K!~]qf9ZyH@4<,|ms`+l:}>}>)EP}$$,HQ' );
define( 'LOGGED_IN_KEY',     '~0a;Z|.8?PgQ5^uu_pHRF=gsM5}$_?=$HZvDJl^iUw*[IrFW5M]p`s~h Ai2b^<:' );
define( 'NONCE_KEY',         'KpWhpQ7#](R_/4!L(Rl<0)8lf[czwv=u$/~@%dq;7f_qlAy$A FuuX;(~tb!]9q-' );
define( 'AUTH_SALT',         '0][.};M&OL1Y~2IdAJwi-yA&<Z=Cd.-ceSTR}|ww6}F822=O;(QVuH^_o{L0O#Me' );
define( 'SECURE_AUTH_SALT',  '/33)r19/-H*>1!@blW5#{r4AmL-UE~U?<ca %+,J)jC8i_J6u}%S&z?`7JKA0L}7' );
define( 'LOGGED_IN_SALT',    '5e,ozaJ!fir#Tc (*RV2Q?k[tw3f9S&oRDznl;JQ3`1XPrT1R#rMX;!&Z$W^qHeP' );
define( 'NONCE_SALT',        'ixCPsBYU:>yfqN4QXKj=~DN?+GWV:zQhR.05a0V()h=E?O-Xj$mO n~]FFr6HV`P' );
define( 'WP_CACHE_KEY_SALT', 'ih`Z[]x*Q@6HzpP2`.|!4EpNaZ<gEPQ-)>chO1]=.+jIa2it1_/98dMep_nEQS!E' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
