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
define( 'DB_NAME', 'citrusdata' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '3Y-b~fh#mR~XE,)z_95d,&:=U|~^jRv!w^p-+<tc{O7)@[loAv:]81/@PV#qg+B}' );
define( 'SECURE_AUTH_KEY',  'IjLT8tf[p:#SzqY>.T>YFb.sXQm]DY+@E:Xnz/P-PV/bVc2)/H9*mcSZ+rz;Z+au' );
define( 'LOGGED_IN_KEY',    'L<<#zG]HZOSi0}RfoAj:#dFD?J_vdo&z,gzAt6N~tB`HkXi=0+X3A/-4k6@vuQCD' );
define( 'NONCE_KEY',        'v9N3G9SOS3>S+YPM3;I>3;uy8]]h+MkXyznSDC_@cmmznWo{cCQ/s$^2|EG.nYwp' );
define( 'AUTH_SALT',        'cbj{`K|.h6BzNoZS^$b4^93-Vi5S yyaC.ypII]W$14yis}2G!)q?oq[Y:nGXoZ7' );
define( 'SECURE_AUTH_SALT', ':&16*pa9H5/3b`?c|ldny.(F6x^S&N)`a%sQ<s3v*],rEO-j,^B?C2fW3wL:[/b^' );
define( 'LOGGED_IN_SALT',   ' y??W:7U4ORE8SZ,X4}:IO3G$@3an2YO~a;sAZ<hyh@G{1go^[hz6&m;<0Zrt1_i' );
define( 'NONCE_SALT',       '&f-?<~42B`%)4{I$HnH$5sIp~vgU&(gX4Kw j,<!m68s]/#96@]NB[B~XmaNoep%' );

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
