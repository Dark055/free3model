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
define( 'DB_NAME', 'free3model_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'a4E#cx$Rv#MyHwiX,T-3?0E^F0gsHCyarD$<EL$q+nY1X1B|Y b*DL2`7v<%CAg`' );
define( 'SECURE_AUTH_KEY',  '?=p[*D0N{F9BfUT}lZNFg&b_BLlHR$p/uoy[AE([iVuC)s<8i2`,SHzWE>LU@3iI' );
define( 'LOGGED_IN_KEY',    'pz%+25OF#QLI^b2IGws@ XRR_GEd&!fATM|q<?N^RJ1ai=JvXza42jIG9~Gwbh/v' );
define( 'NONCE_KEY',        'x?dDk6B?Q%}Lrux}.W~{a!70[Mx@.c=cc|O7*4e#7y-SA+iLIdfR0GW7rCuq@o>;' );
define( 'AUTH_SALT',        'a6=y:d.;s:(E#<XmaWGBGFvxDMC!Ba|X|&X~]d5y}J7gu=^3Tt.QtC2p}m^MnN-d' );
define( 'SECURE_AUTH_SALT', 'lF3-LQq +:e!<sM4]+p7|>Y:7z<in+>.?:g)iwLB%p/`~ 8t5>)8PYA|9Wy+iV=c' );
define( 'LOGGED_IN_SALT',   '|Smr`2PH-)g<.x}@|F~]P~c*iqm:Mpm@=zbmyD#5J:V8wS*:TVF5%+C<y~|q>lkb' );
define( 'NONCE_SALT',       '@SJLC/uaje8&$aQi=chQ4[u;I>PhQoEL0nxt6YJwW4}q^d1%E9`gl7vLvC!-DZX{' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
