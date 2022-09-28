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
define( 'DB_NAME', 'mareaproperties' );

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
define( 'AUTH_KEY',         '!~rlbLc-mxQu~X!a>ZW9gF.sA7J}q6mN7.X!ytnt=7ry?.%=L<9fRP$LFwW!bj= ' );
define( 'SECURE_AUTH_KEY',  ':bm{~O &y_H+V-]:c|X4e ],#nKV<(}/8s9%#]O}6e<T/4U<iS=ZMDXjOrDlU)Is' );
define( 'LOGGED_IN_KEY',    'El>D*=IfZ,y,vC!9<Lnb#mnkGUP;|b3G2LceBkPYFmJp-j~=D xxXXY8V/ZC^9TM' );
define( 'NONCE_KEY',        'euDc==jD/XtPy>{Se0=T7U.c,?~`c504fPXoB6k=:P-JJ5.c[;GS5<?>=&,>(Zk2' );
define( 'AUTH_SALT',        '*jkXe!I|0)g3bkTrgW#+g=Jo]ZHEli)N)IhJ5BpU$*9=t$OfD):.B_5ArU)P3 oe' );
define( 'SECURE_AUTH_SALT', '>Dp?/ySDlmBS,8]7WyDUo7R[kT}6{~vD>Gp^!Z]WBx)ssgCX]L,vVBa/!g@,cJM&' );
define( 'LOGGED_IN_SALT',   'Q{Ui1_z/DZNz`L *v>:<*xAh3)Mpj9D mBFz(DH(}f!;U]cbpJ~olrVVC}`$kML_' );
define( 'NONCE_SALT',       ':OQcQx9&r7LhkX`*28sj_^o3Wwj2dQ+GZRk7rWF@V;a|q.!G,qTt&v>Ov&H=Lj:?' );

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
