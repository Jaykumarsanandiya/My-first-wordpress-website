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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'gchDhVd?Wm,_2JaDtl8nKn>[G/ IL3RE7+;?g%)Dk?[U/qQoaFvL*}Sa(ol@Z/Jw' );
define( 'SECURE_AUTH_KEY',  '7>;f7otEm?iPuJ,Jrw::lS<qE_~V73e6%>pJbL)^U9qQ++m#R}hE0d0+H$i2dc?{' );
define( 'LOGGED_IN_KEY',    'UA;!nCj;N= R,|vS?H6T,Yp1T~O`{MkHa_|^i5Kqk9b 94vB{0}Pj8&0OD~)!v)*' );
define( 'NONCE_KEY',        'kogqfK_E55FA8~K^wVy*Gi{n@Y|,k2~?:K<X`?jxSA9lCB6Ph[L<&(/WL2Dkc4TY' );
define( 'AUTH_SALT',        'Ja|+XWWy444BC-eW^$LZUovg(EH4Q^:;4*eR?NIt>m6-9j{9T/3=(TQI6EkO(@.N' );
define( 'SECURE_AUTH_SALT', '(_c,Il?+ZJh4pPKQOg?-Cc^j9Kbq,rUC8VE{|uWbXn|.~UzwQP#i@f2#K(#/jEn(' );
define( 'LOGGED_IN_SALT',   '_F1Ri8fr8|TIj{3p{nP#PjmzKbkfoddQ$E$Za%jn2}xT7dZlHn9#.4uG3xZD*Abs' );
define( 'NONCE_SALT',       'gG[nLJ^$W*(1s(.0wV&Uzye!C[-=7jqv,YRac7z_fmlc}w82ic(U]!kv30&0w&5Q' );

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
