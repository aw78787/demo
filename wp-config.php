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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'aps' );

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
define( 'AUTH_KEY',         'AY#Jc<&4&w:KqU^$/1w)9`!QqJsu5F{|yzJ&DuV1$+(#xr#D<daZR}kn9u0=2zNt' );
define( 'SECURE_AUTH_KEY',  'O!2x<`L{Nj?C4-UV^[XfF+6LZ2|o <ZsC6u^%[;<6Bwk%i lq{+YnvHPh(wY F# ' );
define( 'LOGGED_IN_KEY',    ':qya2Cs[pn=za8niE+as8e?#2D+nGvz*meZh%YN~VRg/W!<@ozTKuP5%wYC0(uk:' );
define( 'NONCE_KEY',        '87.Pfw1*`/:;ZlkYU!E*hTR.BHkk3$<n3.$/lJ& ,tyN*3Nz*(Od@#KJxxZd,AOD' );
define( 'AUTH_SALT',        'kN{4WS6e7D?.%:p.,6.T{{8cIMdO}i*9:gVvJ[3*c;^.@`q9c{?.<_m%hu]4P@^F' );
define( 'SECURE_AUTH_SALT', 'I-*[N.^qqv)zd;!-P_&YT@VfO~U,uDK(Bns:4M<I<E:BJGzAkOAi292OV,Ew9@v3' );
define( 'LOGGED_IN_SALT',   'Rjxm@mk1#iR7WEIsRLfMX}tIY/o#zg<-qnO&.#t[-)KT#:JX&xLGY+|YHFwDU,s}' );
define( 'NONCE_SALT',       ']:i]QSmu9+u@6G2d;pPZV#Uk?4g0]L^4Cn*/tj8Y>$]hGdp$:]%=Y}+]:I.H57n:' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
