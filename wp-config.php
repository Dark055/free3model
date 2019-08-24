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
define( 'AUTH_KEY',         '[EBDgC0*F6W?ep<vdI4Kv7q3K]1}V#~]&DtPjwxPjxR<AV#qrh 5z=S+/-KbU<ns' );
define( 'SECURE_AUTH_KEY',  ' hi.DtO^_hKgcN+d68rN!tHtH/RJZ:M#b!Se2OSRcZLo Fd2pDw U4uPkfF!iEB7' );
define( 'LOGGED_IN_KEY',    '^9fm|vqN]Z$C;]|*g<|Qd7tFedj!@S{f{u3+0Ol-S<,g?,wQ0pthorn{7f.pLX0>' );
define( 'NONCE_KEY',        'iH(gKWw0M!CtoHs#b6J5Fo#l9ZIj /svC8#@<*TKO}BbqgDO#O=fE77(!i`7F+;U' );
define( 'AUTH_SALT',        '~k8b4WK/f}SJ*A n/.:*bJ=%*u3k)oe+4{fNLCI8U>K >)=z2IqPJ7j$x(<KdGn1' );
define( 'SECURE_AUTH_SALT', '_4C|(cW0&b8=C5im)CBP?Z*+[7V^hRV`[[#nR@~.fG~$UZg(mo<[9#V#{@pl}^A^' );
define( 'LOGGED_IN_SALT',   '[2pM{?$P1ikT=.[**uf>:g9d_N7U)Yn6_B OZ!J[n7AxO+lP*lsIK?#BP8yowFh>' );
define( 'NONCE_SALT',       'eX[odXp$UjmZL?8R<3<A_dsUZ/i-p:-6~/_/1(~kS8:Y&H1;i/B5*s{uyP_gbUE;' );

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
