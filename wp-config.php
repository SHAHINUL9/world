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
define( 'DB_NAME', 'world' );

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
define( 'AUTH_KEY',         '0f[{.WLA:gt 7j8EzMhh)x{a5;.!<>ySiz+{~r*IC!5+g)BzZU&49-n[i}sxyIx*' );
define( 'SECURE_AUTH_KEY',  'NeU|ce!1FLR/,ZIXvY#<?&+@`_?i[HLpJ+NCjy^e>pjdivp[79?0-PP?b`nNoV$]' );
define( 'LOGGED_IN_KEY',    '0O8x<16=k0A=CNs8KCr;[u%2xSbyjOGxlnP`P$]#CufB-Fwe8S:QwS9D+mJOaeJ{' );
define( 'NONCE_KEY',        'PuxintFLmNB<v>uqrh<kiGgfkOe`H/f^R)X.S8F75nmZ&b_LFZK#ueXSG+z)5Ahp' );
define( 'AUTH_SALT',        'jr0E%#+iu-kc$47v9rTIGU$|1@h{^b=06&/uz>B%)cxVI*R3oP[vcq9WEqQgJKPV' );
define( 'SECURE_AUTH_SALT', 'Z),erIR!l{s)jR0*nXk?l|l-z;2,%a7c}9 DNg8*y35XoQMC,]2F605>|T>~;I2X' );
define( 'LOGGED_IN_SALT',   '&Fmlz)9XA!]Nz2PbMhy^z5L)+dX#s)m5Gs4ZZ3yN 3={Md75Q<h>scXT$~D+js0r' );
define( 'NONCE_SALT',       '9vl-OJ8q2Mq3gXT&B$*DD!w^3[deLJbVQ.{%9!a9]HwHX~X<Smzb5: }{s!XhgRK' );

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
