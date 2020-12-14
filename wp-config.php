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

define( 'DB_NAME', '' );


/** MySQL database username */

define( 'DB_USER', '' );


/** MySQL database password */

define( 'DB_PASSWORD', '' );


/** MySQL hostname */

define( 'DB_HOST', '' );


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

define( 'AUTH_KEY',         'C5,9a)o8m/Y<~f9s~SD0KYFnXIJTyS?B$rM ^__{UW#lF}zE5j:bmi^oqim~?;fr' );

define( 'SECURE_AUTH_KEY',  'T[0-CRSBPyMB5m]:8uuZO2R;w?t:<JUYu<][vs[ qac%c?> Xl@sdN+x<mQd7]C:' );

define( 'LOGGED_IN_KEY',    '>B_08z9zekM`cB*TtpM,gv;cG4_(]dfxc%2,3aAVY$:2x[i$;}WV_&WkO.8Y_|S/' );

define( 'NONCE_KEY',        ',@29Y/#r0%DLm|i#Zs7Aq+Z2<]/vdi|+s]?1Av$x;3$^*I(jPn3<r|tGX-t6Mhlw' );

define( 'AUTH_SALT',        '+XQq<4.!5,w9LxF@->|Xv-f=-18C!Uq %s4V{O&(KfnhQGl!!YX>uv0],*q3lzA^' );

define( 'SECURE_AUTH_SALT', 'QxTA^rq{fum bw(mav3@ :Mu,rO*IT]CJobcp,@hUg~35-<Lv~zKLJ6=H,vHxu=}' );

define( 'LOGGED_IN_SALT',   '>~Fvh[ g~uMH)t{{n]o##$|koEs2=VvpX4weDQKgB (Is@aq6N]&/~%>t=KCFs+z' );

define( 'NONCE_SALT',       'mm,UL4gU@0|1:_+o=GaOk*(UhU4:A2~8Og^j[PeI#cb~^*|rKhh5O(- x=N`&7MJ' );


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

