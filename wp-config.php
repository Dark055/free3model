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
define( 'AUTH_KEY',         'yg9:?Q,v9o<<WA1,!kgvZ-6/Y{z|E.?IG#yXCTngWAH`r[mPZwKO<UG!0}g#dV,3' );
define( 'SECURE_AUTH_KEY',  'C&5er*$V8^iPjt&X|pN8|[*Pr=FTF#_&8q}G+lUnU(z6*IZfY=$7}pK^2)&O:R&|' );
define( 'LOGGED_IN_KEY',    ';H`kvi[9mzo{!18&uU]kEu?rQYMI+)PP-51V)~lZ|ev<d5~RRz3z3T2Key+@=YG%' );
define( 'NONCE_KEY',        '6s9`y-#`*E+[fB2TjoG2+4T,4$2gn#jQqHEQD1 qfTE`H{/UW57fB|raFBAt>k*+' );
define( 'AUTH_SALT',        ')@D1m^/@q0h.;[sDYKelzJqfi)y,2s]VJ8cEltKqI%mR$se|#@07pOR`:BMjg5c*' );
define( 'SECURE_AUTH_SALT', 'pmyi8(BfWpBhAPE3:|=Ppv?g s0I&%BwABAFS7z*mh/+5aYD?145xXIbu?9]KUa}' );
define( 'LOGGED_IN_SALT',   'iE{~`M%KG].W)!~}!Du1t/ogK)-(CZ,3gu8NQ0NbY~j2|<m_k.2IW(jL1%72bguE' );
define( 'NONCE_SALT',       'Qlq<vXC!tS%9w9 ]8izC|uQj@baX hE-:i9d-(Td#T:m]y%cY4<EoiSTobc;i]=W' );

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
