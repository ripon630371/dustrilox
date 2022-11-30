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
define( 'DB_NAME', 'dustrilox' );

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
define( 'AUTH_KEY',         ';5B;c EeW~6>Q-y`4cv<?Ha<Y e=)Sebt25pSuJ.]*wN)|_;Mu Sci*,q:*A)-Tr' );
define( 'SECURE_AUTH_KEY',  '8W*=+mK142tEHY^YD&-0g)kZPCdp?2KB%O^aZ49b[PPC#n1:XO]!k!oquf${5yXK' );
define( 'LOGGED_IN_KEY',    'i^KOEV%#p&ea36c=R>kd^|QNa$,Zq$3`N_7itW%E^$MpJoMp|DDd]}a~$MbX?4oD' );
define( 'NONCE_KEY',        'xH$!I7h@ ]E=FBI>#~I{p$TSKbtYPdW*:^RO~Sz.QxMPB:wr4Q^&Vvua97~1L$,Y' );
define( 'AUTH_SALT',        'Lzb~wPY )xBn-YRZG%K.-DEpU?74`nGq)DnLX;wO0O*K0tTWnC!xx6>v-N<To|,4' );
define( 'SECURE_AUTH_SALT', 'p [m.]KPTm[b($ e}`?ApqGXa[d|p;&cw5?L%o`X;/G->S<A[tt,t$|suac<?1Sr' );
define( 'LOGGED_IN_SALT',   'Gv7o>TLqnqqfll.l7/P*q?~xRa@/rzDN%`x7$!$Y>~Xla=MdJ`8]Bl#?AZOa|jD=' );
define( 'NONCE_SALT',       '>!Gh+B6l:EaVHbSHpot/S=8wbVV?:_3(Adn..q_s !//9w-#kU}6lwV#QU5^3{lf' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
