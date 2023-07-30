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
define( 'DB_NAME', 'DavidSpade' );

/** MySQL database username */
define( 'DB_USER', 'DavidSpade' );

/** MySQL database password */
define( 'DB_PASSWORD', 'g8j9h2Un' );

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
define( 'AUTH_KEY',         '<Tt~sh_?I(>Au$1`7gEn?V9EQW87rVz7W!BdQH2>kQ-.A]Kt!Mg yd~<d6JR,_s)' );
define( 'SECURE_AUTH_KEY',  'x55{[e2}RsZ_b%~qr2+L+ GuqN^4Nja2j61-=of5LO)3u}O-bk05gOK!#}x>DHlA' );
define( 'LOGGED_IN_KEY',    '@I#(Pfsz=}+&]a1f;CS:ov81&xX1c@.?m[Wjg+._5g~*dt]XuFcMP_ %?g!Gp2T<' );
define( 'NONCE_KEY',        'Q@e.m-n;uO<2[UE:Z+2mLA`4uEl!~iZX F}]Da0 EQE-,<qEBcuNaa41T/tNh_Wg' );
define( 'AUTH_SALT',        'Xxr;baZ/$:^+<pFQNd@]vL3 q:N$^lKp7&Kp{7aK(|fb)PvPL]mOjGU{[&cJO(dN' );
define( 'SECURE_AUTH_SALT', '<}uvMFi-{OC-~%c5@s((V s/EbvD{&zs(YAmdx(e=L9/8x7&l^mlicQDmv9J:H<U' );
define( 'LOGGED_IN_SALT',   '%?O5 7U]^V5mHy#hP`mGBiVLyzs&cEvc@;U7e53id1:LH&UsF<K-_3+cfKWvN.ol' );
define( 'NONCE_SALT',       'ypZ ahj0rm~x3QUJ!JPKg4;&.i!VL,eKbtW2<{eKgagZ~oO1Be&BHRQPjt#xa*+i' );

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
define('DISABLE_WP_CRON', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
define('FS_METHOD','direct');
