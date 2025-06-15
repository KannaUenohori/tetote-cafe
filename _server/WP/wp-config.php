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
define( 'DB_NAME', 'tetotecafe' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'K5W}31.rbnO|?+D<LWEI# DS-1[P~aeCZeH-.#pfF9wXXW7^Rixpks7h-m1,UHi*' );
define( 'SECURE_AUTH_KEY',  '= X)&C>qG/)b^E9[:XPtcMP^/e1Uo7JOwu+6i9eb`(6=Q0p5|`!<TUwJ&c:mx~n;' );
define( 'LOGGED_IN_KEY',    'ou0+6mJ.i;KBmzb0vIBe/9V]P=}.XEU[Y[!xy/n.{sUyw-Rs#X1bX1d*w=38v~#7' );
define( 'NONCE_KEY',        'e?j~`do8IKX4dj%w.Ff9i6;D0QQB2@$@8QtQ:4u1jAb]3#o3UX#.Hwr)hyZ.FU]m' );
define( 'AUTH_SALT',        '#}VTbxKbK8$?Dt0h^$FD_JGxvTify9MmP2qdSNrNa#~W(egZ^E]QU9}[@6 |G`|s' );
define( 'SECURE_AUTH_SALT', '~}M90IO_=0cFXLw/RJ7),a72W<m p!u(2UL~j /zad,d8~1g@ <ssN/j/]+WSDc)' );
define( 'LOGGED_IN_SALT',   '$EC&C*R?Gvcw~P(Xk;|.Y0Wo=;P7Bqf^gt:](u;|/UV,(D[`1X|-&ql@Da#TOHgt' );
define( 'NONCE_SALT',       'ZyaL/ymHhcU?N 7Mx;/EP;sF*6ju+pfbD%%}`EYbF0asGa^uo#,+ld:o(<5YMq4H' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_tetotecafe_';

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
