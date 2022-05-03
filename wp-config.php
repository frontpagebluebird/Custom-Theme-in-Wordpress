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
define( 'DB_NAME', 'sanpage' );

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
define( 'AUTH_KEY',         'DXq`5bj,Q<j(5JW%{jr;P{o_8Y/@HSJ4X`9OoOc9.pon3Kzf)i5ZB8}uha7)(mo9' );
define( 'SECURE_AUTH_KEY',  '{3:$r(#<a|uMo!$E$?|W.3a`(^f>pSD3K6(*UZpAY)?}Y^j07% HUY#hv?<.503Z' );
define( 'LOGGED_IN_KEY',    '-y]E=;Gf(u|L[&cDx`rG.k!-0njx#,0.uC}*uT[8h;a|m?v+@(W1)0^;YV}voxM~' );
define( 'NONCE_KEY',        'fc$ANZO=zh#S%s=2c%}S&x/<8r;UKd=a]~M~@y]@@~Os3vA.+S~bSGeGSl_24e%P' );
define( 'AUTH_SALT',        'Q}+20itEZ]IVD{*>%l}$@tL9lgPE$`xuf*:o6:6=)mnv{}T*k`Mq8qdd,Om>e~Q{' );
define( 'SECURE_AUTH_SALT', '1JkRs>X}(S(U{w[y^EdK+lPl%X[@r?S.?8[MbM/:5C?0]3GU=(yAb([Dz4![wU_P' );
define( 'LOGGED_IN_SALT',   '{k{na5tn1ejKt#aFNWgC)oou0.yRa-$r1m=<.C|hq|UVK>tUkc<[J5&%$`4p.|*3' );
define( 'NONCE_SALT',       ':Fy_=uYh!7%:Isnyj6rmSu:%#h4@1+2#n;xgh^$mm>=6=w=d2bq)l_DZx)VCj$fA' );

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
