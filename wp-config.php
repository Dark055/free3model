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
define( 'AUTH_KEY',         'bDP|-z=F#h `rk2i3k5.,|fZkR4Pca@|5?eOXT8N_l*O (@iG>baZ`]z39tcKF1F' );
define( 'SECURE_AUTH_KEY',  'OgmO;oziNX}O~2?-8_?XEOAIWs[]^7k3c p#ll/`qPf9 Umk2VB6:C&wQA^uiORN' );
define( 'LOGGED_IN_KEY',    'Lsp>Rpfh`!El:O)hq3;G{~!wo~T$`3Vs2lp9zFGuh&s{$ut{~3pqr?0,h*T6j@I1' );
define( 'NONCE_KEY',        'GW^]yM@4)#2Xe0F:*K~9s4m2fYGETt+g*0Kt/cCCUSMyV a[*gFv$VQ?vd}p|6la' );
define( 'AUTH_SALT',        'p5KaDhMdg;Jtl^u3V:L>rv ipe:&qhSA<Z>ao>AT}O:J/s]J+) mBSz,WuieeMYD' );
define( 'SECURE_AUTH_SALT', 'BaA!,FZ|XudgHhPh?E6Vwo2|k45XCDS/.j(Z8!;q+bsCo;RI1fNkxcfxPgsH-Yjp' );
define( 'LOGGED_IN_SALT',   'J1K3Z}aj^eY9ae|<]k4@i!</%3;c*L_$%bPMY%aMt5*:]<;vV*@+pGUhU2+m?wIx' );
define( 'NONCE_SALT',       'i%uKjR%*5|Na,#;e}kbf[MP_~iwe-oLMv^*tYs+Mz2HMS<fcpaVUr/ Gk]E<hj4t' );

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
