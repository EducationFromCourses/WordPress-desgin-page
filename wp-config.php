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
define( 'DB_NAME', 'wordpress-of-coures' );

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
define( 'AUTH_KEY',         '0Jy*~A=*U`eg$IMWOS+2Vk$I}2Ik:WQVx4y@#iF/:;g0pc~iRnAnVu<Q!d~l)tNu' );
define( 'SECURE_AUTH_KEY',  'F~Y:_V(JNl~,7W}~Y9Cgv%P8:u%JNw!CG^kJ06l/C}zM9AB2kbE4ea;gMaJC%!qR' );
define( 'LOGGED_IN_KEY',    'qF6iH1)M.FsvP?O1^3^m;@RcW~d!u%YyF(KD,n`wc#sL[zgdcavygYatV$n,MO8Y' );
define( 'NONCE_KEY',        'P5bCRQ:D:t;;lljI6. 6#Eo3}A<~ry&u0B~ZPQAf&J2}mx>>ddH:b5>g_~lZWB5N' );
define( 'AUTH_SALT',        '03Ro6})dPtBM@@v-{U]P[EczBRo]*|.jt/K(Iz[UORJlEtHrdW6lc;vq.[B=S#9V' );
define( 'SECURE_AUTH_SALT', 'U2{ rxI>Ft]*iSF8[dGr%+j%[MIY#pNi9B@{xU~u$0$ht(kgP(A@$3?#2<7]6ME1' );
define( 'LOGGED_IN_SALT',   'V$7HA}psUZdpOH]Nif-jA]$G!eE}G`f$s;#acU6/c}EY|pvbGL !Jx?_Iv5n&<8U' );
define( 'NONCE_SALT',       '6Wy4 ce@)0IjCD@W)5_|31<78;EMxa<lKFjc6Z%CMZd.(Vn+RfVsWN1.b*xT,xN5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
