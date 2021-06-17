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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_vuejsarchive' );

/** MySQL database username */
define( 'DB_USER', 'wp_vuejsarchive' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wp_vuejsarchive' );

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
define('AUTH_KEY',         '8 T}fbmI11S<{ToZB>0i_|y~ko9K<KSI}j5dg?s[i`,U.l6gkbBs)JUV@+VDAWJJ');
define('SECURE_AUTH_KEY',  'I§(-U 8<%c)9dJ23<!;I4&Z@2n4(sX%=tp^+BswmdIQL}g+q§k5!GH|3:J[QB/ta');
define('LOGGED_IN_KEY',    '+U7fNyxaId}G@DMC>f i=/5IGj5<s;§y=HCc1[§M{lD/t>Op9Yw(-%mF%,oEG$Fi');
define('NONCE_KEY',        'iX{,A83D^/85:D~otF7UyhXYFxsG-CbIuv5{LoANO<Sn2Ya/$k-85-dW4Q,^:8r}');
define('AUTH_SALT',        '%qfv:y5%:u^[SSKrHw@BK§+UxM:GWUCIcoG(gzJ7N @73UG)Eb)kho[2a1;jtwPe');
define('SECURE_AUTH_SALT', ' ,f-xsTukT[;j,dsIy>NZSqm6@}3(~(fh.S[Qqa&N^S6aDi,`)a^ldgf|Qb%R!?6');
define('LOGGED_IN_SALT',   'G- J)K?(buO4qOa}DKZ360?g}E~ a:bU1<ZYKPzA};J,R83gTTITT;x6$D^@W3RJ');
define('NONCE_SALT',       'DtTOzF![>^GQ752=2PAC?aoEP0Z toqmQ1§3[h:<EZ$_KZd/DSjYq^duteaUc,0z');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
