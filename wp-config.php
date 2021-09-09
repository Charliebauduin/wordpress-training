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
define( 'DB_NAME', 'Wordpress-test' );

/** MySQL database username */
define( 'DB_USER', 'Charlie' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Oursduhood+91' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '8YgYrS]}v//tq,z!*j%Kh~vx;p_BZUvqToWxY|&zO].YP%#|=J1[@^HLcUMCo`R6' );
define( 'SECURE_AUTH_KEY',  'k!V,7&Z>S2-BT)aRwB.UsCw;uVQE$46v!Uvi|P=<:t.`]=rjrN@R7I6nM2Av%D6z' );
define( 'LOGGED_IN_KEY',    'o;o-Os#VS9,/n}8jTt=?wj{ze;Dl~B?TA>E]{cKh1+*%XFEai]P+S?gq,p60lr6L' );
define( 'NONCE_KEY',        ':HPm}p<A;Q%6c4O_mscQt/9 o^I/T>-6sd$r0.#+-%?A 3&6=]|4![*Hb-s?N/wf' );
define( 'AUTH_SALT',        '!I3&JoID.ddKu@ji [!Dve0_=SJO1<.c/.g~1P<_!C`82Oye-yMEn%H}Ipp.r/2Z' );
define( 'SECURE_AUTH_SALT', ' p*Kgn<I)$P.)v8a|Z7ek-n6:MWO`mijk[uOYO1pwOc8|V:GM$|iXp)pLfIBK}w#' );
define( 'LOGGED_IN_SALT',   'n<Y.D^^_rdRW6WGMcVjl.+)zl0X0(:HVIdwW7P#AO>qj)A^.~jxLM (,|^Eb!AEZ' );
define( 'NONCE_SALT',       'HJq8J,r0fH63^i][w6hcF`Vjudeq!B(ykLO4b<p(.@@O`G[j40T,0eDVdPb3~ :)' );

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
