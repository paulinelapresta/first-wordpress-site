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
define( 'AUTH_KEY',         'sRU9WY!5<B0yiD85:T[&*HyjADM`Bj]S!$j)<hK9y=QH6gaqY0V!3|~A-8_tDL9u' );
define( 'SECURE_AUTH_KEY',  'DF!xF}?qLKLh^/j]Qs;39ct@tY84M6_>%:^CY_F!wq5r/$XBoi2C.@t !*pD&gFX' );
define( 'LOGGED_IN_KEY',    'V8>LLWNBt2t@Uja3bvoKRA|H8KRI]DXsv2k;~7wgTUf5zc`XGK,{k.Ankk>Eli,~' );
define( 'NONCE_KEY',        '@;y[t7 Pc)l eIUpHuiUk74sT!_{: Ice/j-%~v8421Vh/+gpBpF?AAR3kS#jors' );
define( 'AUTH_SALT',        '%D;tO+J[n9V{>O,/kNr6X.!V^5&#=$l_lI8ACF:=Z;@I}%A-x7:iu8{lwjwwcw(,' );
define( 'SECURE_AUTH_SALT', 'hOxc[$?I-7B_${,{[{ZvLA!)a@#Mh4C,WsVL4W%4{C513OZOd!n+z8[P31n?|74S' );
define( 'LOGGED_IN_SALT',   'f)|@7`3{u=qrt|seG`&iy>s.m5N#7+?tz$8?mE#VO}NYch)e1hB^hY7>{A_AT//-' );
define( 'NONCE_SALT',       'PMg]`){j]gzIn{ G67@%$P8M}{5afP0R/TXqArH5)yMyon]iy@7),hzp*eMS/_.y' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
