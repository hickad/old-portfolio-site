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
define( 'DB_NAME', 'davidhickacom' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '5A>X#P]r~#wpa1:UDQ^_yP^1WHn.a}YX HT(I]$;VJ8:~C=h@-P3?^Gzn08g]654' );
define( 'SECURE_AUTH_KEY',  'jYDk*T1S2dJ<OX kbf@Z&3Tu|6AmQBLxcF5MP0?Tw#PN>{{@jGI7e%cg:_GSqE<<' );
define( 'LOGGED_IN_KEY',    'OV$Rw<4$&z_j4.M.[yvzq:@|Ji9Sly%F4sshZUmXd-)a3S6k`imSAfWRQE`jX<IM' );
define( 'NONCE_KEY',        'pg*HB;<Ys[F-:$q}B,^<b?1R^[,68?L:#:w?SM_s`Lz|UzS4g,%gqPS1FnuRr,7w' );
define( 'AUTH_SALT',        'zow/?qAnOe@+u@He,Yo;Z<.B=9f-)#Bza-EGgBd1v}VFWKn$j*Kgz`7oFh|`ck7P' );
define( 'SECURE_AUTH_SALT', 'JPlBvbF@)vMJ|Q&+yC~,IES#a]Ra(|_lAcFf(]`,:y2J1+;0`E+y)u7||WzIwil2' );
define( 'LOGGED_IN_SALT',   '>1]SUI|$tH0IqP:]~5bzD9g;o~LpKcO,_ruuY)&RxQ!h(mKLc#]BkET[g8.q b02' );
define( 'NONCE_SALT',       'z5>Nj1k}V?{`BlmD9w4/Y IMD2RCWg]I$z`A1Pv:JQ~<3GlVY+y7WPCA.y<AK92M' );

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
