<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
 define('AUTH_KEY',         'BHFVuU;_+o^]>H=<jIgW?w!7c<eR,uXT`} 9+v+W{Bq:{y$aJwvx$Rxs-`wn;)D;');
 define('SECURE_AUTH_KEY',  'I%v7+<<>#@.i}JqI D9PFj)*6RwEm;rew{=eAFYN%`5^|Gl/E$*ht,nn~jyj.ttV');
 define('LOGGED_IN_KEY',    '|a4V?4*Jzx[? 9+3zsF53:Lw68|bHerzM]@$DP#1TMhmIU+wjlfk-?1-Z-28lUF9');
 define('NONCE_KEY',        'gt%l5]UAk3P0-:^$C61 c]$q$IMMjw#:IWoAtnjy$^~vI}PEK.Ob%v/qWaWth<C-');
 define('AUTH_SALT',        '^SEie:k:k~B1sx&i@|x2*,&@&7=RFJ8H0zQRpl?K1dqFGswj, 1~Y]I!4iqHZm?4');
 define('SECURE_AUTH_SALT', 'pIS>{-(Y[o+|?|y95SF+0WlOY<-m}-/!!g0<.jb*N4@?eKs(wb%6^}`Y Ps2<1#q');
 define('LOGGED_IN_SALT',   'ek3OTL$J-m}Mib6nq)|is0~R#ucf9n?^{S6tW3><vwj5 d,::pF}9ZpCqR!7-T?R');
 define('NONCE_SALT',       '`&TtdO0lt!~.f__{Z,|SfDl6M1D7g.{iI`,S=o#I~9V<B|*u4F7^xZZ`N<}6-H !');

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
define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
