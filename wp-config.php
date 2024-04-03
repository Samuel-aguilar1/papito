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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Yussepe' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'lZ)wc<lcz6ileEGz0k-ia9)%VkJ-xy9*5S`n8Tg7=5MLq_v$v;Ux=Jt4n?e3vKfB' );
define( 'SECURE_AUTH_KEY',  '4#o~J0+6]:)ISLrV4>D36}I`Dod$fzlObP(_4thP@G;zF]zEvND`k:s~#;O!LUHF' );
define( 'LOGGED_IN_KEY',    '&Yj/?-xOQgN>JcQPXuR<CtDGc.pbx+v/[pvK@hpWf++0Q)Ge,{,#=*%}WICzF`(Y' );
define( 'NONCE_KEY',        ';rNv>JIYeDTKBjP::%iUZYiP 2]kz>TY6kXQinZ^$4zGU2jJsGO~W;%%X;@ac[`=' );
define( 'AUTH_SALT',        '^BrJ5/]m2gjDI3r4_f!MHi3jHN/yXko4!ZGgCEm@4u6r2PNsV`UTtfji<^l;{0x^' );
define( 'SECURE_AUTH_SALT', 'E8:hj^La;~9c^bySOW-459^y,|f|v(Y`_$Qu tFA*i!T#5A{KnOKiGb8~p;73g-u' );
define( 'LOGGED_IN_SALT',   ')>YzX5:?=Og&l{;VMeEYL;(-VO),M<|,U_MVI`201U2svD@r$4>DU(;`w9b/aLw6' );
define( 'NONCE_SALT',       'U^M3mc:Mqt9(tO73=lovn&@1C.) %_l<GTr93kAcm:.BGIjT0ly>!} PK$pOtI&I' );

/**#@-*/

/**
 * WordPress database table prefix.
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
