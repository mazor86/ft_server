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
define( 'DB_USER', 'mazor' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '{zR7+1-@+>l]rJw(rvkHA<.@V&F:?oFFhv$ToPZHw$|+*-6+Q%o4.GMAFo%[U+u~');
define('SECURE_AUTH_KEY',  'zM|du60-#}]=>]}Q5![VS0dAP_=(I;<1l|R6hW|aCdG8$|}X|JtD57$m1(:olZ$]');
define('LOGGED_IN_KEY',    ':1/0Rr4=]FL_Rj<=#%J+EFM]#>W*h1[|*~(/6X2MOV.EWYSU?l za/yiF`TE3,`@');
define('NONCE_KEY',        '+9.b3dF$0cQ9!b&.?Noj]z6HAdcZUoL62{_jV&iqd4o@k1+)aqjtgx=J-%l9!:L$');
define('AUTH_SALT',        'j6E+z%x|Q!]:]epL5-oi0{c$S7o9;vr_G>5u.wd,~9(i-MZ|QH4iyK[5&Z]{p%GQ');
define('SECURE_AUTH_SALT', 'gNbk>-[dWSU%rhu9-az`=wQ$.H Y2A<JtDufsxihs>&d+hwb~ZU5e@i6E`8PJT+_');
define('LOGGED_IN_SALT',   '(yRDAJOal]oz}Vg}F!9Op]*.aAy8?tG!kYFVf~l`d+|($) 7u^HMrlJfaKb.Kn]#');
define('NONCE_SALT',       'b)H5YQ,YQ/,wYO1(78g? -/sH 5]c{-Gg[J+WSli:|+:4%){@3--P[WDvvstPdwe');
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