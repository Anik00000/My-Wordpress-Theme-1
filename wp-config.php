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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '^_A1O0A5<AQ@Rb/TN5IlW)W^d34N$.F>H9B0S(Oq &sn4+>z5U<cr0.m+tmJ!$o7' );
define( 'SECURE_AUTH_KEY',  'K=}A*ia2h{XsC3]?B45Mp$6<Sq>zZpvXtxs0X1VLj]],=>p]%FPVOuw*|3rtD/XN' );
define( 'LOGGED_IN_KEY',    ')(tpOGE?8`{-22oIPl(@FdE*6KLE-B/x2T`xCO0jw?$o1yz!MFeuDJ&#L1ys,Lf.' );
define( 'NONCE_KEY',        '`T6K=TrFe*Q`0:,Sg;m6Qsz/xic3of]!WEUV4$;k`|=>RF{M!`&p|x_P](mY&j1F' );
define( 'AUTH_SALT',        'oKC8ER%+&z*o-&|jwxpYse=V]K9$>#Yx:[}9adf1jw[N)l|,<2nyz2^y;gXiaIiP' );
define( 'SECURE_AUTH_SALT', ' ?OGdlxh1*8QldoMHmDq5 ;&z~|Hy37TsY0CCxLO44h9<F[Ovb[.`1A.8j@^kPM(' );
define( 'LOGGED_IN_SALT',   'GXZ=D<C(CO/#cVCoKPo^i3~DK*%)D50&`ckt|QRNo-Qho.fnM 9qtKU1ip-mHXKd' );
define( 'NONCE_SALT',       '%HC32DZ4(Lb^nAcWvpfBi9 zI.M<AkVOgD)oB4B3<KW!L+a0a${5nr-eA*mtr3om' );

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
