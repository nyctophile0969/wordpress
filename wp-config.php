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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'x:1d<6pqKHl3:P*8%a]J0YW6}_T?fN=)3fS~]ZxYj*Li8%sOH:JohqIQWKr{LF]R' );
define( 'SECURE_AUTH_KEY',  '2H,+Bs0?>]a%$Me-wX5EuuHLAtw4](!w:3u>M->i#ZQFcPW^166^og]5/{YasXke' );
define( 'LOGGED_IN_KEY',    'bn`T}<B&~4a6hbAsMRLY9-:d{/bOx8Y>|;R%A&K[7kBa{3}#Y5rryiH(&D*q3mQ2' );
define( 'NONCE_KEY',        '7L_o2v,u-~)%`o`8!-(q63:(L{F9YYAf#2~@<AX/)X0pG?K+>}EHzL]`_oq)=DwT' );
define( 'AUTH_SALT',        '309ZpSU{AI*&AzA];YP_hF3x2ls!Yd# QPazh7Pmpp^-J$kySt,jbU:(!m$TU/fx' );
define( 'SECURE_AUTH_SALT', 'W3mW66,6/Gv<zV~?ws~3zNyoHVmg0C73tMGc@23;Xv,1!5H+17nw*(PUivhy]Z8H' );
define( 'LOGGED_IN_SALT',   '`w)=r&fhvd=f*m8jr8sGMtLz.OB?>ur/@b>-K<ktmNSnrS$}v8qqa0m54r!Y^4:*' );
define( 'NONCE_SALT',       '5W,wyi5Gs@3&4;bV9~/)t&,v4_*e-y32LHXeJXo#xaZ_}E1rFzk~v.9M$8ls6o$w' );

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
