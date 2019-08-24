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
define( 'DB_NAME', 'free3model' );

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
define( 'AUTH_KEY',         'aQM/TO9m)t9z/Q[KZjUx#tNbzSSQoc>DH,Zl[Fad~^QH@?5PkyUj>DcdSe<MN)Ud' );
define( 'SECURE_AUTH_KEY',  '8hVy#eU;Ul~5bu|}lcQP4d5UOVgT;=;<,KgjX&2%5%NNjV(1Yr65!nVui/L 2}uw' );
define( 'LOGGED_IN_KEY',    'L<5!Wio_|4eN^#Irjg*UKQc5%3^Tvz`X!cG0!IKS}nfYi%OgpV e5LfTWkp.UyfQ' );
define( 'NONCE_KEY',        '/4t#nF&rMkte}t}LS[As-Nq7L$<)4q*[-@?TS7*nc3>Amf5! ,,EW0^FVMZ|BB,U' );
define( 'AUTH_SALT',        'L@r;| N6fqi[~z;OSwG@b~0+m1^4:wMuVRtN0;@?GT#Lb>9u<%4z(zQh/;cs5d[G' );
define( 'SECURE_AUTH_SALT', '`TuxJYnv#1QT}z~#YZ^p[1>2OgIZU<, -iz=jxSx0Gl]o%LzWZm~X!FD2j3-brnF' );
define( 'LOGGED_IN_SALT',   'r([K(m.{@|5<Zl*!83OWE_q^?1/H]!sP&+m2EC!b29 _,c^D@1+s&p{oLf#r09%Y' );
define( 'NONCE_SALT',       ')$G35!(n)-C0YIO9$ppiVt_v/H@&9o!:10mFb<oczv]c_MQ>?zH6|Z1Fa:1V~G$u' );

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
