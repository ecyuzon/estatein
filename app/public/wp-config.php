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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '`%{!0NYX1<{m!,sd~JLGRP}WTXa,u/FD~R[eC!kGDnj<R$^&TDJ:AP=AYq+FIWGB' );
define( 'SECURE_AUTH_KEY',   'H-u%0KF5?M)+!~B@5OG60leyk-->bu4y,5?7uG>@xGK{[:9/rGOD#.o#3_@pYv~l' );
define( 'LOGGED_IN_KEY',     '_-4{H%kb_ l@+Kxqn,anu^r)M3:0X+EDzcmPd~a?;s$MmWp|~KW :|9x^hHD<1CJ' );
define( 'NONCE_KEY',         'YoPm8(`Ax90.fSqK)z~8HmED&[)}MOGa.r9/z5SF X5*&!1<0{:TDWtu/70nwjJI' );
define( 'AUTH_SALT',         'P$ND:DiZo#c~MecD}|}bmkwIwuW4+/U^G8|[DrhRZK~0@7[h!Ll#O=5 q-{fQ{8E' );
define( 'SECURE_AUTH_SALT',  '+?@x(n[Lfw 1rQ!L!%o=gh/<#Lk6eKU_EJRc&{We/!g7hTml|l2!Y+RuMF{>QCfL' );
define( 'LOGGED_IN_SALT',    'Zj&r:~KtKB1Z$N -cw;bcS|*i)7TjS;1KZ2t7t9+y`e?:q99HhWYTE2 G^&JWs_8' );
define( 'NONCE_SALT',        '}dj0cK-lp4i517TvW&yKbyTJ1S0Em2bM<g HQvK#j._3pxNr6/>wx%,6`2Ij3`ds' );
define( 'WP_CACHE_KEY_SALT', 'tIh6iK_$AUO*NAUxPdl4D:v>+7nv)E[lJ>qE`G1@y$:s=RKu+eox`{VHfZ#@3 R`' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
