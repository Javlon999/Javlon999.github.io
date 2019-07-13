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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_we' );

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
define( 'AUTH_KEY',         'daA]~v4zr$C_)S9on7O8Ay#h;4%XKVQVNTi,_I~wMUYE`,sNpJFwLCsrSZ<w$`2S' );
define( 'SECURE_AUTH_KEY',  '#%s6-0c6c[RYVU4o?x7 hJ8oH9fI(2[nAD1;n2_Lw&%X0igmx.[E.qA1k3ykL|7c' );
define( 'LOGGED_IN_KEY',    'Szly_^cN*s6n]BQymnm)@e_o4[,;@EwXHfX?n!F}>j_sYL1J+]=o{;aG$DF6g&$<' );
define( 'NONCE_KEY',        'BO/cCDk5Vs2c0l!C3B7VphqHn$HUD37W;NC:sBm8aH*D9Ht7!F*x?%zhZ8p&s_*U' );
define( 'AUTH_SALT',        '(xmQm7Xl459DTy#qL;`&nNy9.u.UmucVxn#@L;Xt.*LiJiHxh6&9&b?AOugYBtL ' );
define( 'SECURE_AUTH_SALT', '0~d#)/Fh*;A~ln=#O*++0R.^| xVG_cLvlWQ7IMV(0}S7&0|AFQnfK4gU7&HnL*[' );
define( 'LOGGED_IN_SALT',   'UN&^}oK97uD@f`@<;Ea;}-F$kyT/|rY%{V@njc=h 6~r%z7hS73[9n30CbkcV/0s' );
define( 'NONCE_SALT',       '@{ka_l>ow_,nD&df9Uy<yZ(=t?UGJ#I7LJ;p4Af1$cY3_yuA `9r/?Z 88f!2-%D' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
