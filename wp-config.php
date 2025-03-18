<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'fd-web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('WP_HOME', 'http://localhost/fd-web-wp');
define('WP_SITEURL', 'http://localhost/fd-web-wp');

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
define( 'AUTH_KEY',         '5v18~XBWbj;3Xd.Ry:@9Y,YYTO%S=2[OTKFk]/8mCY#t0;xK[m]rG$+z|<P}y+;U' );
define( 'SECURE_AUTH_KEY',  ']4[;B)ko0pgH2JKqp@#M`[!O^|/p^vEadEJ?LiMtXXB%d}hz2ZW!qRCp!]-4T`4/' );
define( 'LOGGED_IN_KEY',    '=Y[8v6ja4}+~U+dj3yc2{WcdP $PTz^F}m2:B0r|B[-/`H2lE)g)>U:9{EDK-+%/' );
define( 'NONCE_KEY',        '(&c~XsO:V~TmbkZfenIo/>$OWC+f@F1qr9SM!t:%>05t(*Q3oN(~$nH[5hvF1cmC' );
define( 'AUTH_SALT',        't^#m`~X()mNj8yQ?6OrFhfn9(uCi`iZ)/)6 ?6e+b+7;^34hyuy0VK^w<ZX`6M_^' );
define( 'SECURE_AUTH_SALT', 'Q._ih|qF^4.8L~{C|wZB;]yJ7{E,9zDLpFsQl*p>:%1M=fdZlN}JAJONIG(PH:qw' );
define( 'LOGGED_IN_SALT',   '00uNgr[=eo>+drV@M1CQj2M|I8;6PKu,]|)Kg]#Ikk5>Q{YsI6GQ~L7|G|Uw9qPx' );
define( 'NONCE_SALT',       'SBcOzFhDTnv*PZc&fQZEFV&Ds8UJ;IWkoIo>+m4O{uIDo /WaN_9}_7;lGVb_*VG' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
